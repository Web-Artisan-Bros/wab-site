<?php

return [
  'home'    => [
    'title'     => 'Home',
    'label'     => 'Home',
    'routeName' => 'home',
    'order'     => 1,
  ],
  'about'   => [
    'title'     => 'Servizi',
    'label'     => 'Servizi',
    'routeName' => 'services',
    'order'     => 2,
    'children'  => [
      [
        'title'     => 'Siti Web',
        'label'     => 'Siti Web',
        'routeName' => 'services',
        'order'     => 1,
      ],
      [
        'title'     => 'SEO',
        'label'     => 'SEO',
        'routeName' => 'services',
        'order'     => 2,
      ],
      [
        'title'     => 'Social Marketing',
        'label'     => 'Social Marketing',
        'routeName' => 'services',
        'order'     => 3,
      ],
      [
        'title'     => 'Web Design',
        'label'     => 'Web Design',
        'routeName' => 'services',
        'order'     => 4,
      ],
      [
        'title'     => 'Pacchetto Business',
        'label'     => 'Pacchetto Business',
        'routeName' => 'services',
        'order'     => 5,
      ],
    ]
  ],
  'contact' => [
    'title'     => 'Chi siamo',
    'label'     => 'Chi siamo',
    'routeName' => 'about',
    'order'     => 3,
  ],
];
