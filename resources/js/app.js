import './bootstrap';

import Alpine from 'alpinejs';
import { Dashboard } from "./dashboard";


window.Alpine = Alpine;

Alpine.start();

const dashboard = new Dashboard();
dashboard.init();