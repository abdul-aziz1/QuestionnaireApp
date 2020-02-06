<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $string = file_get_contents(__DIR__ .'/randomdata.html');
        $string = preg_replace('/<!--.*-->/', '', $string);
        $xml = simplexml_load_string($string);
        $xml = json_encode($xml);
        $xml = json_decode($xml, true);
        $questions = [];
        foreach($xml['div'] as $q) {
        if(!isset($q['div']['p']['strong'])) {
            continue;
        }
            $question= [];
            $question['question'] = $q['div']['p']['strong'];
            foreach($q['ul']['li'] as $op) {
                $question['options'][] = [
                $op['span'],
                preg_match('/correct/', $op['@attributes']['class'], $m) ? true : false
                ];
        };
            $questions[] = $question;
        }
        return (array_values($questions));
    }
}
