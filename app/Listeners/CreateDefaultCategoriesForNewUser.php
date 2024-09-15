<?php

namespace App\Listeners;

use App\Models\Category;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateDefaultCategoriesForNewUser
{
    public function __construct()
    {
        //
    }

    public function handle(Registered $event)
    {
        $user = $event->user;

        $defaultCategories = ['Personal', 'Work', 'Urgent'];

        foreach ($defaultCategories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'user_id' => $user->id,
            ]);
        }
    }
}
