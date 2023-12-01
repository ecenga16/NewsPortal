// $(document).ready(function() {
//     $("#basic-datatable").DataTable({
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     var a = $("#datatable-buttons").DataTable({
//         lengthChange: false,
//         buttons: [
//             { extend: "copy", className: "btn-light" },
//             { extend: "print", className: "btn-light" },
//             { extend: "pdf", className: "btn-light" }
//         ],
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");

//     $("#selection-datatable").DataTable({
//         select: { style: "multi" },
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     $("#key-datatable").DataTable({
//         keys: true,
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     $("#alternative-page-datatable").DataTable({
//         pagingType: "full_numbers",
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     $("#scroll-vertical-datatable").DataTable({
//         scrollY: "350px",
//         scrollCollapse: true,
//         paging: false,
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     $("#scroll-horizontal-datatable").DataTable({
//         scrollX: true,
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     $("#complex-header-datatable").DataTable({
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         },
//         columnDefs: [
//             { visible: false, targets: -1 }
//         ]
//     });

//     $("#row-callback-datatable").DataTable({
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         },
//         createdRow: function(a, e, t) {
//             if (parseFloat(e[5].replace(/[\$,]/g, "")) > 150000) {
//                 $("td", a).eq(5).addClass("text-danger");
//             }
//         }
//     });

//     $("#state-saving-datatable").DataTable({
//         stateSave: true,
//         language: {
//             paginate: {
//                 previous: "<i class='mdi mdi-chevron-left'>",
//                 next: "<i class='mdi mdi-chevron-right'>"
//             }
//         },
//         drawCallback: function() {
//             $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
//         }
//     });

//     $(".dataTables_length select").addClass("form-select form-select-sm");
//     $(".dataTables_length select").removeClass("custom-select custom-select-sm");
//     $(".dataTables_length label").addClass("form-label");
// });
