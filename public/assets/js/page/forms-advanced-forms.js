"use strict";

document.addEventListener('DOMContentLoaded', function() {
  // Phone number
  if (document.querySelector('.phone-number')) {
    var cleavePN = new Cleave('.phone-number', {
      phone: true,
      phoneRegionCode: 'us'
    });
  }

  // Currency
  if (document.querySelector('.currency')) {
    var cleaveC = new Cleave('.currency', {
      numeral: true,
      numeralThousandsGroupStyle: 'thousand'
    });
  }

  // Purchase code
  if (document.querySelector('.purchase-code')) {
    var cleavePC = new Cleave('.purchase-code', {
      delimiter: '-',
      blocks: [4, 4, 4, 4],
      uppercase: true
    });
  }

  // Invoice input
  if (document.querySelector('.invoice-input')) {
    var cleaveI = new Cleave('.invoice-input', {
      prefix: 'INV',
      delimiter: '-',
      blocks: [10],
      uppercase: true
    });
  }

  // Date mask
  if (document.querySelector('.datemask')) {
    var cleaveD = new Cleave('.datemask', {
      date: true,
      datePattern: ['Y', 'm', 'd']
    });
  }

  // Credit card
  if (document.querySelector('.creditcard')) {
    var cc_last_type;
    var cleaveCC = new Cleave('.creditcard', {
      creditCard: true,
      onCreditCardTypeChanged: function(type) {
        // ... (le reste du code pour la carte de crédit)
      }
    });
  }

  // Password strength
  if (document.querySelector('.pwstrength')) {
    $(".pwstrength").pwstrength();
  }

  // Date range picker
  if (document.querySelector('.daterange-cus')) {
    $('.daterange-cus').daterangepicker({
      locale: {format: 'YYYY-MM-DD'},
      drops: 'down',
      opens: 'right'
    });
  }

  if (document.querySelector('.daterange-btn')) {
    $('.daterange-btn').daterangepicker({
      // ... (le reste du code pour daterange-btn)
    });
  }

  // Color picker
  if (document.querySelector('.colorpickerinput')) {
    $(".colorpickerinput").colorpicker({
      format: 'hex',
      component: '.input-group-append',
    });
  }

  // Input tags
  if (document.querySelector('.inputtags')) {
    $(".inputtags").tagsinput('items');
  }
});