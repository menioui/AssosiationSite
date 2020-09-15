<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $firstCase = App\Content::create([
            'contentTitle' => "Le but de l'association",
            'contentContent' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis est lorem. Proin maximus elit leo, id posuere odio vestibulum lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus bibendum feugiat lacus, tempor finibus velit sagittis id. Nullam blandit, nisi at facilisis tempus, ex sapien vehicula elit, ut mattis tellus augue ut turpis. Duis dapibus hendrerit tortor, non lobortis nunc efficitur a. Cras faucibus sem vel sollicitudin tincidunt. Donec dapibus, nisi in convallis auctor, arcu sapien vehicula lectus, eu varius ex erat a nunc. Ut vestibulum accumsan est, ac egestas risus iaculis in. Aliquam sem augue, consequat id commodo vel, tristique eu metus. Ut aliquam tempus odio id ultricies. Maecenas laoreet metus dui, posuere aliquam nunc egestas vel. Duis non ipsum lectus.",
            'contentPage' => "aboutPage",
        ]);
        $firstCase->save();

        $secondCase = App\Content::create([
            'contentTitle' => "À propos de l'association",
            'contentContent' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis est lorem. Proin maximus elit leo, id posuere odio vestibulum lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus bibendum feugiat lacus, tempor finibus velit sagittis id. Nullam blandit, nisi at facilisis tempus, ex sapien vehicula elit, ut mattis tellus augue ut turpis. Duis dapibus hendrerit tortor, non lobortis nunc efficitur a. Cras faucibus sem vel sollicitudin tincidunt. Donec dapibus, nisi in convallis auctor, arcu sapien vehicula lectus, eu varius ex erat a nunc. Ut vestibulum accumsan est, ac egestas risus iaculis in. Aliquam sem augue, consequat id commodo vel, tristique eu metus. Ut aliquam tempus odio id ultricies. Maecenas laoreet metus dui, posuere aliquam nunc egestas vel. Duis non ipsum lectus.",
            'contentPage' => "aboutPage",
        ]);
        $secondCase->save();

        $thirdCase = App\Content::create([
            'contentTitle' => "À propos de l'équipe",
            'contentContent' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis est lorem. Proin maximus elit leo, id posuere odio vestibulum lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus bibendum feugiat lacus, tempor finibus velit sagittis id. Nullam blandit, nisi at facilisis tempus, ex sapien vehicula elit, ut mattis tellus augue ut turpis. Duis dapibus hendrerit tortor, non lobortis nunc efficitur a. Cras faucibus sem vel sollicitudin tincidunt. Donec dapibus, nisi in convallis auctor, arcu sapien vehicula lectus, eu varius ex erat a nunc. Ut vestibulum accumsan est, ac egestas risus iaculis in. Aliquam sem augue, consequat id commodo vel, tristique eu metus. Ut aliquam tempus odio id ultricies. Maecenas laoreet metus dui, posuere aliquam nunc egestas vel. Duis non ipsum lectus.",
            'contentPage' => "aboutPage",
        ]);
        $thirdCase->save();
    }
}
