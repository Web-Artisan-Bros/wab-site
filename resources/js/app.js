import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import "./shadow";
import "bootstrap/dist/js/bootstrap.bundle.min";

import "./follow";

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
