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
        'title'     => 'Sviluppo Web',
        'label'     => 'Sviluppo Web',
        'routeName' => 'services',
        'order'     => 1,
      ],
      [
        'title'     => 'Digital Design',
        'label'     => 'Digital Design',
        'routeName' => 'services',
        'order'     => 2,
      ],
      [
        'title'     => 'Sviluppo Software',
        'label'     => 'Sviluppo Software',
        'routeName' => 'services',
        'order'     => 3,
      ],
      [
        'title'     => 'Sviluppo App Mobile',
        'label'     => 'Sviluppo App Mobile',
        'routeName' => 'services',
        'order'     => 4,
      ],
      [
        'title'     => 'Trasformazioni Digitale',
        'label'     => 'Trasformazioni Digitale',
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
