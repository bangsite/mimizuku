'use strict';

import 'slick-carousel';
import '../../vendor/inc2734/wp-basis/node_modules/sass-basis/src/js/basis.js';

import BasisStickyHeader from '../../vendor/inc2734/wp-basis/node_modules/sass-basis-layout/src/js/sticky-header.js';
new BasisStickyHeader();

import Inc2734_WP_Share_Buttons from '../../vendor/inc2734/wp-share-buttons/src/assets/js/wp-share-buttons.js';
new Inc2734_WP_Share_Buttons();

import FixAdminBar from './fix-adminbar.js';
new FixAdminBar();
