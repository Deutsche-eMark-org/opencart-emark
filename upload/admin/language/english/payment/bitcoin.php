<?php

/**
 * LICENSE
 *
 * This source file is subject to the GNU General Public License, Version 3
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @category   OpenCart
 * @package    Bitcoin Payment for OpenCart
 * @copyright  Copyright (c) 2015 Eugene Lifescale (a.k.a. Shaman) by OpenCart Ukrainian Community (http://opencart-ukraine.tumblr.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License, Version 3
 */

// Heading
$_['heading_title']         = 'Deutsche eMark';

// Text
$_['text_payment']          = 'Payment';
$_['text_success']          = 'Success: You have modified eMark details!';
$_['text_edit']             = 'Edit eMark';
$_['text_google_api']       = 'Google API';
$_['text_bitcoin']          = '<a href="http://deutsche-emark.de/" target="_blank"><img src="view/image/payment/emark.png" alt="Deutsche eMark" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_copyright']        = '';


// Entry
$_['entry_total']           = 'Order Total';
$_['entry_order_status']    = 'Order Status';
$_['entry_geo_zone']        = 'Geo Zone';
$_['entry_status']          = 'Status';
$_['entry_sort_order']      = 'Sort Order';
$_['entry_user']            = 'RPC User';
$_['entry_password']        = 'RPC Password';
$_['entry_host']            = 'RPC Host';
$_['entry_port']            = 'RPC Port';
$_['entry_path']            = 'RPC Path';
$_['entry_qr']              = 'QR Code';
$_['entry_currency']        = 'BitCoin Currency';

// Help
$_['help_total']            = 'The checkout total the order must reach before this payment method becomes active.';
$_['help_user']             = 'eMark RPC Username';
$_['help_password']         = 'eMark RPC Password';
$_['help_host']             = 'eMark RPC Host, localhost by default';
$_['help_port']             = 'eMark RPC Port, 8332 by default';
$_['help_path']             = 'eMark RPC Path, empty by default';
$_['help_qr']               = 'eMark Address will be formatted as additional QR Code';
$_['help_currency']         = 'Create, activate and change your eMark Currency';

// Error
$_['error_permission']      = 'Warning: You do not have permission to modify payment eMark!';
$_['error_response']        = 'Warning: Could not connect to eMark via RPC! Response: %s';
