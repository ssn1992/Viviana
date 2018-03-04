// *****************************
// ***** Private Variables *****
// *****************************
/**
 * Save this instance
 * @type @this;
 * @private
 */
var self = this;

/**
 * If Module has been initiated
 * @type Boolean
 * @private
 */
var _isInit = false; // to avoid 'rebinds'

/**
 * Request
 * @type String
 * @private
 */
var _request;

/**
 * Instagram Instance
 */
import Contact from './Contact.vue';

// *****************************
// ***** Private functions *****
// *****************************
/**
 *
 * Instagram
 *
 * Create Contact
 *
 */
var _contact = function () {
    // Create all requested instances
    new Vue({
        el: '#contact',
        mixins: [Contact],
    });
};

// ****************************
// ***** Public functions *****
// ****************************
/**
 * start
 *
 * Starts the module
 * Inits private variables and executes specific logic needed for the module
 * to start.
 *
 * @required
 * @param request
 * @type array
 *
 * @public
 */

self.start = function() {
    if(!_isInit) {
        // Init Instagram Component
        _contact();
    }
};