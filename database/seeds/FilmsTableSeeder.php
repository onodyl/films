<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'header' => 'SPIES IN DISGUISE Trailer (Will Smith & Tom Holland) 2019',
            'subheader' => 'SPIES IN DISGUISE Trailer (Will Smith & Tom Holland) 2019 | Lance and Walter. One is a super cool and charming spy, and the other invents the super cool gadgets Lance uses. When an event happens, they must learn to rely on each other like never before in order to save the world.',
            'content' => 'SPIES IN DISGUISE Trailer (Will Smith & Tom Holland) 2019 | Lance and Walter. One is a super cool and charming spy, and the other invents the super cool gadgets Lance uses. When an event happens, they must learn to rely on each other like never before in order to save the world.SPIES IN DISGUISE Trailer (Will Smith & Tom Holland) 2019 | Lance and Walter. One is a super cool and charming spy, and the other invents the super cool gadgets Lance uses. When an event happens, they must learn to rely on each other like never before in order to save the world.',
            'picture' => 'https://i.redd.it/spo5q1n66gg11.jpg',
            'url' => 'iaki3gfeOYs',
            'category' => 'Comedy',
        ]);
        
            
        DB::table('films')->insert([
            'header' => 'CAPTAIN MARVEL Tv Spot & Trailer (2019)',
            'subheader' => 'CAPTAIN MARVEL Tv-Spot & Trailer (2019) | Carol Danvers becomes one of the universe most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.',
            'content' => 'CAPTAIN MARVEL Tv-Spot & Trailer (2019) | Carol Danvers becomes one of the universe most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.CAPTAIN MARVEL Tv-Spot & Trailer (2019) | Carol Danvers becomes one of the universe most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.',
            'picture' => 'https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'url' => 'XWR98o17bwI',
            'category' => 'Horror',
        ]);
        
            
        DB::table('films')->insert([
            'header' => 'IS IT ROMANTIC Trailer (2019)',
            'subheader' => 'ISNT IT ROMANTIC Trailer (2019) | A young woman disenchanted with love mysteriously finds herself trapped inside a romantic comedy.',
            'content' => 'ISNT IT ROMANTIC Trailer (2019) | A young woman disenchanted with love mysteriously finds herself trapped inside a romantic comedy.ISNT IT ROMANTIC Trailer (2019) | A young woman disenchanted with love mysteriously finds herself trapped inside a romantic comedy.ISNT IT ROMANTIC Trailer (2019) | A young woman disenchanted with love mysteriously finds herself trapped inside a romantic comedy.',
            'picture' => 'https://static.wamiz.fr/images/upload/shutterstock_275323622.jpg',
            'url' => 'e4CNs-wblo4',
            'category' => 'Horror',
        ]);
        
            
        DB::table('films')->insert([
            'header' => 'WONDER PARK Trailer (FULL HD) 2019',
            'subheader' => 'WONDER PARK Trailer (FULL HD) 2019 | June, an optimistic, imaginative girl, discovers an incredible amusement park called Wonderland hidden in the woods. The park is full of fantastical rides and talking, funny animals - only the park is in disarray. June soon discovers the park came',
            'content' => 'WONDER PARK Trailer (FULL HD) 2019 | June, an optimistic, imaginative girl, discovers an incredible amusement park called Wonderland hidden in the woods. The park is full of fantastical rides and talking, funny animals - only the park is in disarray. June soon discovers the park came WONDER PARK Trailer (FULL HD) 2019 | June, an optimistic, imaginative girl, discovers an incredible amusement park called Wonderland hidden in the woods. The park is full of fantastical rides and talking, funny animals - only the park is in disarray. June soon discovers the park came WONDER PARK Trailer (FULL HD) 2019 | June, an optimistic, imaginative girl, discovers an incredible amusement park called Wonderland hidden in the woods. The park is full of fantastical rides and talking, funny animals - only the park is in disarray. June soon discovers the park came ',
            'picture' => 'https://static.wamiz.fr/images/news/facebook/article/oynx-le-chat-fb-5bd97ca281c2e.jpg',
            'url' => 'rFXcaT4KHwA',
            'category' => 'Comedy',
        ]);
        
        DB::table('films')->insert([
            'header' => 'THE AFTER PARTY Trailer (Netflix 2018) DJ Khaled, Wiz Khalifa Movie HD',
            'subheader' => 'THE AFTER PARTY Trailer (Netflix 2018) DJ Khaled, Wiz Khalifa Movie HD | Following two buddies looking to land a record deal before one heads to college and the other to the military. The story takes place during "one wild night".',
            'content' => 'THE AFTER PARTY Trailer (Netflix 2018) DJ Khaled, Wiz Khalifa Movie HD | Following two buddies looking to land a record deal before one heads to college and the other to the military. The story takes place during "one wild night".THE AFTER PARTY Trailer (Netflix 2018) DJ Khaled, Wiz Khalifa Movie HD | Following two buddies looking to land a record deal before one heads to college and the other to the military. The story takes place during "one wild night".THE AFTER PARTY Trailer (Netflix 2018) DJ Khaled, Wiz Khalifa Movie HD | Following two buddies looking to land a record deal before one heads to college and the other to the military. The story takes place during "one wild night".',
            'picture' => 'https://images.pexels.com/photos/236293/pexels-photo-236293.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
            'url' => 'gBJtpkAkHOM',
            'category' => 'Comedy',
        ]);
    }
}
