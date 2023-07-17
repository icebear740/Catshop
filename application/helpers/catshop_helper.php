<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function tgl($d)
{
   return date('l, F d M Y', strtotime($d));
}
