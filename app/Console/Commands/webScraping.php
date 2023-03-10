<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use Goutte\Client;
// use Goutte\Client;
use  Goutte\Client  ;
class webScraping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'web-scraping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://eg.opensooq.com/ar');
        $div = $crawler->filter('.sc-ce6bba76-1 jpCUsR section')->first();

        // $section = $client->filter('.sc-ce6bba76-1 jpCUsR section li')->each(function($liElemet) use($client){
        //     $a = $liElemet->filter()
        // })
        dd($div->attr('class'));



        return 0;
    }
}
