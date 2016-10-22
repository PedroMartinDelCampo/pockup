<?php

namespace Pockup\Console\Commands;

use Illuminate\Console\Command;

use Pockup\Category;

class CategoryAdd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:add {category}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a category';

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
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('category');
        $category = new Category();
        $category->name = $name;
        $category->save();
    }
}
