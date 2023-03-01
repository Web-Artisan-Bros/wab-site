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
        'routeName' => 'web',
        'order'     => 1,
      ],
      [
        'title'     => 'Digital Design',
        'label'     => 'Digital Design',
        'routeName' => 'design',
        'order'     => 2,
      ],
      [
        'title'     => 'Sviluppo Software',
        'label'     => 'Sviluppo Software',
        'routeName' => 'software',
        'order'     => 3,
      ],
      [
        'title'     => 'Sviluppo App Mobile',
        'label'     => 'Sviluppo App Mobile',
        'routeName' => 'app',
        'order'     => 4,
      ],
      [
        'title'     => 'Trasformazioni Digitale',
        'label'     => 'Trasformazioni Digitale',
        'routeName' => 'digital',
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
