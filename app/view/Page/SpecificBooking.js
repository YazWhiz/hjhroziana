/*
 * File: app/view/Page/SpecificBooking.js
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

Ext.define('HjHRoziana.view.Page.SpecificBooking', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.pagespecificbooking',

    requires: [
        'HjHRoziana.view.Page.NasiAmbengViewModel10',
        'HjHRoziana.view.Mock.Grid',
        'Ext.container.Container',
        'Ext.form.Label'
    ],

    viewModel: {
        type: 'pagespecificbooking'
    },
    border: false,
    cls: 'bg-ambeng',
    style: 'width:100% !important;\ndisplay:block;',
    header: false,
    title: 'My Panel',

    layout: {
        type: 'vbox',
        align: 'center'
    },
    items: [
        {
            xtype: 'container',
            cls: 'fullimg',
            style: 'background-image:url(resources/images/bg-booking.png);\nbackground-repeat: no-repeat;\n    background-position: center;\n    background-size: cover;\n    width: 100%;\n    height: 880px;\n    min-height:100%;\n    padding-top:10px;',
            width: '100%',
            layout: {
                type: 'vbox',
                align: 'stretch'
            },
            items: [
                {
                    xtype: 'container',
                    height: 859,
                    layout: {
                        type: 'vbox',
                        align: 'center'
                    },
                    items: [
                        {
                            xtype: 'label',
                            cls: 'h4',
                            height: 40,
                            itemId: 'selectedType',
                            margin: '50 0 0 0',
                            text: 'NASI AMBENG RESERVATION'
                        },
                        {
                            xtype: 'container',
                            flex: 1,
                            layout: {
                                type: 'hbox',
                                align: 'stretch'
                            },
                            items: [
                                {
                                    xtype: 'container',
                                    margin: '10 20 0 0',
                                    layout: {
                                        type: 'vbox',
                                        align: 'stretch'
                                    },
                                    items: [
                                        {
                                            xtype: 'mockgrid',
                                            flex: 1
                                        }
                                    ]
                                }
                            ]
                        }
                    ]
                }
            ]
        }
    ]

});