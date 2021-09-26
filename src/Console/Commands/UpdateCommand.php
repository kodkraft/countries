<?php

namespace Kodkraft\Countries\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Kodkraft\Countries\Models\Country;

class UpdateCommand extends Command
{
    protected $signature = 'countries:update';


    protected $description = 'Update countries using source';

    public function handle()
    {
        $client = new Client();
        $countries = json_decode($client->get(config('countries.url'))->getBody());
        $this->output->title('Updating countries from source');
        $this->output->progressStart(count($countries));
        foreach ($countries as $country) {
            /** @var Country $c */
            $c = Country::firstOrNew([
                                         'alpha3Code' => $country->alpha3Code
                                     ]);
            $c->name = $country->name;
            $c->alpha2Code = $country->alpha2Code;
            $c->alpha3Code = $country->alpha3Code;
            $c->callingCodes = $country->callingCodes;
            $c->altSpellings = $country->altSpellings;
            $c->region = $country->region;
            $c->capital = $country->capital;
            $c->save();
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
        $this->output->success('Done.');
        return 0;
    }
}
