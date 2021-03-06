/*
 * File: app/view/MyViewport1.js
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

Ext.define('HjHRoziana.view.MyViewport1', {
    extend: 'Ext.container.Viewport',
    alias: 'widget.myviewport1',

    requires: [
        'HjHRoziana.view.MyViewport1ViewModel',
        'HjHRoziana.view.Page.Home',
        'HjHRoziana.view.Page.About',
        'HjHRoziana.view.Page.Wedding',
        'HjHRoziana.view.Page.NasiAmbeng',
        'HjHRoziana.view.Page.NasiMadani',
        'HjHRoziana.view.Page.ChefatHome',
        'HjHRoziana.view.Page.Booking',
        'HjHRoziana.view.Page.CaterBooking',
        'HjHRoziana.view.Page.SpecificBooking',
        'HjHRoziana.view.Page.WeddingPackageIntan',
        'HjHRoziana.view.Page.WeddingPackagePermata',
        'HjHRoziana.view.Page.WeddingPackageBerlian',
        'Ext.Img',
        'Ext.toolbar.Toolbar',
        'Ext.button.Button',
        'Ext.toolbar.Separator',
        'Ext.panel.Panel',
        'Ext.form.Label'
    ],

    viewModel: {
        type: 'myviewport1'
    },
    scrollable: 'y',

    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    items: [
        {
            xtype: 'container',
            cls: 'ctnpricolor',
            height: 80,
            minWidth: 1024,
            style: 'box-shadow:1px 2px 17px #000;\nz-index:1000;\nborder-bottom:1px solid #545353;',
            layout: {
                type: 'hbox',
                align: 'stretch'
            },
            items: [
                {
                    xtype: 'container',
                    flex: 1,
                    items: [
                        {
                            xtype: 'image',
                            height: 80,
                            maxHeight: 80,
                            maxWidth: 325,
                            minHeight: 80,
                            minWidth: 325,
                            style: '<img src="resources/images/logo-roziana.svg" onerror="this.onerror=null; this.src=\'resources/images/logo-roziana.png\'">',
                            width: 325,
                            src: 'resources/images/logo-roziana.png'
                        }
                    ]
                },
                {
                    xtype: 'toolbar',
                    cls: 'tbrtrans',
                    margin: '0 20 0 0',
                    items: [
                        {
                            xtype: 'button',
                            cls: 'btncnav',
                            itemId: 'mnuHome',
                            text: 'Home'
                        },
                        {
                            xtype: 'tbseparator',
                            style: 'opacity:0.5;'
                        },
                        {
                            xtype: 'button',
                            cls: 'btncnav',
                            itemId: 'mnuAbout',
                            text: 'About'
                        },
                        {
                            xtype: 'tbseparator',
                            style: 'opacity:0.5;'
                        },
                        {
                            xtype: 'button',
                            cls: 'btncnav',
                            itemId: 'mnuWeddingCatering',
                            text: 'WEDDING'
                        },
                        {
                            xtype: 'tbseparator',
                            style: 'opacity:0.5;'
                        },
                        {
                            xtype: 'button',
                            cls: 'btncnav',
                            itemId: 'mnuNasiAmbeng',
                            text: 'Nasi Ambeng'
                        },
                        {
                            xtype: 'tbseparator',
                            style: 'opacity:0.5;'
                        },
                        {
                            xtype: 'button',
                            cls: 'btncnav',
                            itemId: 'mnuAlMadani',
                            text: 'Nasi Al-MAdani'
                        },
                        {
                            xtype: 'tbseparator',
                            style: 'opacity:0.5;'
                        },
                        {
                            xtype: 'button',
                            cls: 'btncnav',
                            itemId: 'mnuChefHome',
                            text: 'Chef@home'
                        },
                        {
                            xtype: 'tbseparator',
                            style: 'opacity:0.5;'
                        },
                        {
                            xtype: 'button',
                            cls: 'btncnav',
                            itemId: 'reqtocontact',
                            text: 'Enquiry'
                        }
                    ]
                }
            ]
        },
        {
            xtype: 'container',
            itemId: 'mainBody',
            minWidth: 1024,
            width: '100%',
            layout: 'card',
            items: [
                {
                    xtype: 'pagehome',
                    title: 'Home'
                },
                {
                    xtype: 'pageabout',
                    title: 'About'
                },
                {
                    xtype: 'pagewedding',
                    title: 'Wedding'
                },
                {
                    xtype: 'pagenasiambeng',
                    title: 'Nasi Ambeng'
                },
                {
                    xtype: 'pagenasimadani',
                    title: 'Nasi AlMadani'
                },
                {
                    xtype: 'pagechefathome',
                    title: 'Chef At Home'
                },
                {
                    xtype: 'pagebooking',
                    title: 'Booking'
                },
                {
                    xtype: 'pagecaterbooking',
                    title: 'Cater Booking'
                },
                {
                    xtype: 'pagespecificbooking',
                    title: 'Specific Booking'
                },
                {
                    xtype: 'pageweddingpackageintan',
                    title: ''
                },
                {
                    xtype: 'pageweddingpackagepermata'
                },
                {
                    xtype: 'pageweddingpackageberlian'
                }
            ]
        },
        {
            xtype: 'container',
            cls: 'ctnpricolor',
            minWidth: 1024,
            padding: 20,
            width: '100%',
            layout: {
                type: 'vbox',
                align: 'stretch'
            },
            items: [
                {
                    xtype: 'container',
                    layout: {
                        type: 'vbox',
                        align: 'center'
                    },
                    items: [
                        {
                            xtype: 'image',
                            height: 55,
                            margin: '10 0 0 0',
                            maxHeight: 55,
                            maxWidth: 55,
                            minHeight: 55,
                            minWidth: 55,
                            width: 55,
                            src: 'resources/images/logo-footer.png'
                        },
                        {
                            xtype: 'label',
                            cls: 'h1',
                            height: 25,
                            margin: '10 0 10 0',
                            text: 'Hjh Roziana Catering Services'
                        },
                        {
                            xtype: 'button',
                            cls: 'btnfooterbook',
                            hidden: true,
                            margin: '10 0 0 0',
                            width: 170,
                            scale: 'large',
                            text: 'Book now!'
                        },
                        {
                            xtype: 'label',
                            flex: 1,
                            cls: 'h2',
                            height: 30,
                            margin: '10 0 0 0',
                            text: 'Your satifaction is our priority!'
                        },
                        {
                            xtype: 'label',
                            cls: 'h6',
                            height: 20,
                            margin: '20 10 5 0',
                            text: 'Hj Osman    |  +65 9732 0454   |  hjboy1970@gmail.com'
                        },
                        {
                            xtype: 'label',
                            cls: 'h6',
                            height: 23,
                            text: 'Hjh Roziana  |   +65 9825 9567  |   roz2rose@yahoo.com.sg'
                        },
                        {
                            xtype: 'toolbar',
                            flex: 1,
                            cls: 'tbrtrans',
                            margin: '10 0 0 0',
                            style: 'background-color:transparent;',
                            items: [
                                {
                                    xtype: 'button',
                                    cls: 'btnfooter',
                                    itemId: 'mnuHome',
                                    text: 'Home'
                                },
                                {
                                    xtype: 'tbseparator'
                                },
                                {
                                    xtype: 'button',
                                    cls: 'btnfooter',
                                    itemId: 'mnuAbout',
                                    text: 'About'
                                },
                                {
                                    xtype: 'tbseparator'
                                },
                                {
                                    xtype: 'button',
                                    cls: 'btnfooter',
                                    itemId: 'mnuWeddingCatering',
                                    text: 'Wedding Catering'
                                },
                                {
                                    xtype: 'tbseparator'
                                },
                                {
                                    xtype: 'button',
                                    cls: 'btnfooter',
                                    itemId: 'mnuNasiAmbeng',
                                    text: 'Nasi Ambeng'
                                },
                                {
                                    xtype: 'tbseparator'
                                },
                                {
                                    xtype: 'button',
                                    cls: 'btnfooter',
                                    itemId: 'mnuAlMadani',
                                    text: 'Nasi AL-Madani'
                                },
                                {
                                    xtype: 'tbseparator'
                                },
                                {
                                    xtype: 'button',
                                    cls: 'btnfooter',
                                    itemId: 'mnuChefHome',
                                    text: 'Chef@Home'
                                },
                                {
                                    xtype: 'tbseparator'
                                },
                                {
                                    xtype: 'button',
                                    cls: 'btnfooter',
                                    itemId: 'reqtocontact',
                                    text: 'Enquiry'
                                }
                            ]
                        }
                    ]
                }
            ]
        }
    ]

});