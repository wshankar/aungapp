<?php

use App\Model\Admin\InvComment;
use App\Model\Admin\MedComment;
use App\Model\Admin\RecordComment;
use App\Model\DailyRecord;
use App\Model\Investigation;
use App\Model\Medication;
use App\Model\Profile;
use App\Model\Subscription;
use App\Model\User;
use App\Model\UserFeedback;
use App\Model\UserPromise;
use Carbon\Cli\Invoker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function($user){
            return $user->profile()->save(factory(Profile::class)->make());
        });
        factory(DailyRecord::class, 10)->create()->each(function($record){
            return $record->record_comment()->save(factory(RecordComment::class)->make());
        });
        factory(Investigation::class, 10)->create()->each(function($inv){
            return $inv->inv_comment()->save(factory(InvComment::class)->make());
        });
        factory(Medication::class, 10)->create()->each(function($med){
            return $med->med_comment()->save(factory(MedComment::class)->make());
        });
        factory(UserFeedback::class, 10)->create();
        factory(UserPromise::class, 10)->create();
        factory(Subscription::class, 10)->create();
    }
}
