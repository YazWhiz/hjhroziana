/*
 * File: app.js
 *
 * This file was generated by Sencha Architect version 4.0.2.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 6.2.x Classic library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 6.2.x Classic. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

// @require @packageOverrides
Ext.Loader.setConfig({

});


Ext.application({

    requires: [
        'HjHRoziana.Global'
    ],
    models: [
        'booking'
    ],
    views: [
        'MyViewport1',
        'Page.Home',
        'Page.NasiAmbeng',
        'Page.NasiMadani',
        'Page.Wedding',
        'Page.ChefatHome',
        'Page.Booking',
        'Page.About',
        'Page.WeddingPackageBerlian',
        'Page.WeddingPackagePermata',
        'Page.CaterBooking',
        'Page.SpecificBooking',
        'Mock.Grid',
        'Page.PopOut',
        'MsgBox',
        'DisplayPDF'
    ],
    controllers: [
        'MainMenu'
    ],
    name: 'HjHRoziana',

    requires: [
        'HjHRoziana.Global'
    ],

    launch: function() {
        Ext.create('HjHRoziana.view.MyViewport1');
    }

});
