     function go_to_print(elem)
        {
        var divContents = $('#'+elem).html();
        var title = document.title;
        var printWindow = window.open('_blank');
        printWindow.document.write('<html><head>');
        printWindow.document.write('<script src="theme/bower_components/jquery/dist/jquery.min.js"></script>');
        printWindow.document.write('<script type="text/javascript" src="theme/bower_components/printer/jquery.print.js"></script>');
        printWindow.document.write('<script type="text/javascript" src="theme/js/admin/print.js"></script>');
        printWindow.document.write('<link rel="stylesheet" type="text/css" href="theme/dist/css/print.css"/>');
        printWindow.document.write('</head><body><div id="printable"><h3>');
        printWindow.document.write(title);
        printWindow.document.write('</h3><table class="layout">');
        printWindow.document.write(divContents);
        printWindow.document.write('</table></div><button id="prnt" onclick="print_elems()">Print</button</body></html>');
        }

        function print_sallary_slip(elem)
        {
        var divContents = $('#'+elem).html();
        var title = document.title;
        var printWindow = window.open('_blank');
        printWindow.document.write('<html><head>');
        printWindow.document.write('<script src="theme/bower_components/jquery/dist/jquery.min.js"></script>');
        printWindow.document.write('<script type="text/javascript" src="theme/bower_components/printer/jquery.print.js"></script>');
        printWindow.document.write('<script type="text/javascript" src="theme/js/admin/print.js"></script>');
        printWindow.document.write('<link rel="stylesheet" type="text/css" href="theme/dist/css/print.css"/>');
        printWindow.document.write('</head><body><div id="printable"><h3>');
        printWindow.document.write('Payroll Slip - Imperial Dormitory');
        printWindow.document.write('</h3><table class="layout">');
        printWindow.document.write(divContents);
        printWindow.document.write('</table></div><button id="prnt" onclick="print_elems()">Print</button</body></html>');
        }

        function print_elems()
        {
         $('#printable').print({
                  globalStyles: true,
                  mediaPrint: true,
                  stylesheet: null,
                  noPrintSelector: ".btn",
                  iframe: true,
                  append: null,
                  prepend: null,
                  manuallyCopyFormValues: true,
                  deferred: $.Deferred(),
                  timeout: 250,
                  title: null,
                  doctype: '<!doctype html>'
          });
        }