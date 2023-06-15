<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RerollController extends Controller
{
    // User Reroll Page
    public function index()
    {
        return view('rerolls.index');
    }

    public function reroll()
    {
        $items = [
            ['name' => 'Small Potion Heal', 'game_item_id' => 1050, 'chance' => 0.12, 'stock' => 1000],
            ['name' => 'Medium Potion Heal', 'game_item_id' => 3315, 'chance' => 0.08, 'stock' => 80],
            ['name' => 'Big Potion Heal', 'game_item_id' => 5830, 'chance' => 0.06, 'stock' => 15],
            ['name' => 'Full Potion Heal', 'game_item_id' => 1650, 'chance' => 0.04, 'stock' => 10],
            ['name' => 'Small MP Potion', 'game_item_id' => 10235, 'chance' => 0.12, 'stock' => 1000],
            ['name' => 'Medium MP Potion', 'game_item_id' => 892, 'chance' => 0.08, 'stock' => 80],
            ['name' => 'Big MP Potion', 'game_item_id' => 14736, 'chance' => 0.06, 'stock' => 15],
            ['name' => 'Full MP Potion', 'game_item_id' => 19001, 'chance' => 0.04, 'stock' => 8],
            ['name' => 'Attack Ring', 'game_item_id' => 135007, 'chance' => 0.05, 'stock' => 10],
            ['name' => 'Defense Ring', 'game_item_id' => 68411, 'chance' => 0.05, 'stock' => 10],
            ['name' => 'Lucky Key', 'game_item_id' => 118930, 'chance' => 0.15, 'stock' => 1000],
            ['name' => 'Silver Key', 'game_item_id' => 117462, 'chance' => 0.15, 'stock' => 1000],
        ];

        $totalChance = array_sum(array_column($items, 'chance'));
        $selectedItem = null;
        $availableItems = [];

        foreach ($items as $item) {
            if ($item['stock'] > 0) {
                $availableItems[] = $item;
            }
        }

        // count 100 times
        $totalAvailableItems = count($availableItems) * 100;

        if ($totalAvailableItems > 0) {
            $randomNumber = mt_rand(0, $totalChance * 100) / 100;

            foreach ($availableItems as $item) {
                if ($randomNumber <= $item['chance'] && $item['stock'] > 0) {
                    $selectedItem = $item;
                    break;
                }
                $randomNumber -= $item['chance'];
            }
        }

        if ($selectedItem) {
            // Item selected

            $itemName = $selectedItem['name'];
            $selectedItemId = $selectedItem['game_item_id'];
            $selectedItemChance = $selectedItem['chance'];
            $selectedItemStock = $selectedItem['stock'];

            $randomStock = rand(1,$selectedItemStock - 1);

            // the selected item 
            return redirect()->route('rerolls.index')->with('success',"Congratulation you got these items !!!")->with('itemname',$itemName)->with('itemchance',$selectedItemChance)
            ->with('itemstock',$randomStock);

        } else {
            return redirect()->route('rerolls.index')->with('error',"Items Out of Stock!");
        }

    }
}
