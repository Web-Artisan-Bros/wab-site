<?php

namespace Database\Seeders;

use App\Enums\QrType;
use App\Models\Qr;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Seeder;


class QrTypesSeeder extends Seeder {
  private $types = [
    [
      "name"        => QrType::URL,
      "description" => "A URL",
      "fields"      => [
        [
          "name"        => "url",
          "type"        => "text",
          "label"       => "URL",
          "placeholder" => "https://example.com",
          "validation"  => "required|url"
        ],
      ],
    ],
    [
      "name"        => QrType::TEXT,
      "description" => "A simple text message",
      "fields"      => [
        [
          "name"        => "text",
          "type"        => "text",
          "label"       => "Text",
          "placeholder" => "",
          "validation"  => "required|string|max:255"
        ],
      ],
    ]
  ];
  
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    foreach ($this->types as $type) {
      \App\Models\QrType::updateOrCreate([
        'name' => $type["name"],
      ], [
        'name'        => $type["name"],
        'description' => $type["description"],
        'fields'      => json_encode($type["fields"]),
      ]);
    }
  }
}
