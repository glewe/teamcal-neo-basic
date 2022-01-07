/**
 * tcneo.js
 * 
 * @category TeamCal Neo Basic
 * @author George Lewe <george@lewe.com>
 * @copyright Copyright (c) 2014-2018 by George Lewe
 * @link http://www.lewe.com
 * @license https://georgelewe.atlassian.net/wiki/x/AoC3Ag
 *
 * Based on a script by Meitar found here:
 * https://maymay.net/blog/2008/06/15/ridiculously-simple-javascript-version-string-to-object-parser/
 *
 * The script is included on the About page of TeamCal Neo where the running 
 * version is compared with this one here, representing the most current one.
 *
 */

//
// Set current TeamCal Neo version
// 
var latest_version = parseVersionString('2.3.0');

// ---------------------------------------------------------------------
/**
 * Parses a version string into an array. It expects a version string
 * of three blocks separated by '.', e.g. 3.1.002
 *
 * @param string $str Version string
 * @return array (major, minor, patch)
 */
function parseVersionString (str) 
{
   if (typeof(str) != 'string') { return false; }
   var x = str.split('.');
    
   // 
   // Parse from string block or default to 0 if can't parse
   //
   var maj = parseInt(x[0]) || 0;
   var min = parseInt(x[1]) || 0;
   var pat = parseInt(x[2]) || 0;
   
   // 
   // Return array
   //
   return {
      major: maj,
      minor: min,
      patch: pat
   }
}

