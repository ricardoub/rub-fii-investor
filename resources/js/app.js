import './bootstrap';

import { Collapse, Datepicker, initTE, Input, Ripple } from "tw-elements";
initTE({ Collapse, Datepicker, Input, Ripple });

import Alpine from 'alpinejs'
import mask from '@alpinejs/mask'

Alpine.plugin(mask)

Alpine.start()
window.Alpine = Alpine
