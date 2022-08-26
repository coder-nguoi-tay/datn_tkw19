<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RepositoryGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Repository & RepositoryInterface for model';

    /**
     * Name of model
     *
     * @var string
     */
    protected $name = '';

    /**
     * Replacements content
     *
     * @var array
     */
    protected array $replacements = [];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->name = $this->argument('name');
        if (! preg_match('/^[a-z0-9\-]+$/i', $this->name)) {
            $this->error('Only alphabetic characters are allowed.');

            return 1;
        }

        $stubs = $this->getStubs();
        $this->registerReplace('{Name}', $this->name);
        $this->registerReplace('{name}', Str::camel($this->name));

        if ($this->checkExist() && ! $this->option('force')) {
            $this->warn('The file has exist, if you still want to make new file, adding "--force" flag');

            return 1;
        }

        foreach ($stubs as $k => $stub) {
            $this->line('Generating '.$this->name.($k == 1 ? 'Repository' : 'Interface').' file...');
            $fileName = str_replace('{name}', $this->name, $stub['destination']);

            $this->makeFolder(File::dirname($fileName));

            File::copy($stub['path'], $fileName);

            $this->replaceContent($fileName);
            sleep(2);
            $this->line('Generated '.$this->name.($k == 1 ? 'Repository' : 'Interface'));
        }

        $this->line('The '.$this->name.' repository was created successfully');

        return 0;
    }

    /**
     * Check & create destination folder
     *
     * @params string $dirname
     * @return bool
     */
    public function makeFolder(string $dirname): bool
    {
        if (! File::isDirectory($dirname)) {
            File::makeDirectory($dirname, 0755, true);
        }

        return true;
    }

    /**
     * Execute replace file content
     *
     * @param string $path
     * @return bool
     */
    public function replaceContent(string $path): bool
    {
        if (! file($path)) {
            return false;
        }

        $file = File::get($path);

        $file = str_replace(array_keys($this->replacements), array_values($this->replacements), $file);
        File::put($path, $file);

        return true;
    }

    /**
     * Register keyword to replace in new file
     *
     * @param string $search
     * @param string $replace
     * @return void
     */
    public function registerReplace(string $search, string $replace): void
    {
        $this->replacements[$search] = $replace;
    }

    /**
     * Preparing stub files
     *
     * @return array
     */
    public function getStubs(): array
    {
        return [
            [
                'path' => base_path('stubs/Repository/Repository.stub'),
                'destination' => app_path('Repositories/{name}/{name}Repository.php'),
            ],
            [
                'path' => base_path('stubs/Repository/Interface.stub'),
                'destination' => app_path('Repositories/{name}/{name}Interface.php'),
            ],
        ];
    }

    /**
     * Check the file prepare to generate is exist or not
     * Return true if exist | false if not exist
     *
     * @return bool
     */
    public function checkExist(): bool
    {
        $stubs = $this->getStubs();

        foreach ($stubs as $stub) {
            $fileName = str_replace('{name}', $this->name, $stub['destination']);
            if (File::exists($fileName) && File::isFile($fileName)) {
                return true;
            }
        }

        return false;
    }
}
