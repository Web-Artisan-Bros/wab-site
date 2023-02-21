import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import "./shadow";
import "bootstrap/dist/js/bootstrap.bundle.min";

import "./follow";
import "./pageChanger";
import "./pageLoader";
import "./navbarScroller";

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
