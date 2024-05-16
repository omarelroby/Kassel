/******/
(function(modules) { // webpackBootstrap
    /******/ // The module cache
    /******/
    var installedModules = {};
    /******/
    /******/ // The require function
    /******/
    function __webpack_require__(moduleId) {
        /******/
        /******/ // Check if module is in cache
        /******/
        if (installedModules[moduleId]) {
            /******/
            return installedModules[moduleId].exports;
            /******/
        }
        /******/ // Create a new module (and put it into the cache)
        /******/
        var module = installedModules[moduleId] = {
            /******/
            i: moduleId,
            /******/
            l: false,
            /******/
            exports: {}
            /******/
        };
        /******/
        /******/ // Execute the module function
        /******/
        modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
        /******/
        /******/ // Flag the module as loaded
        /******/
        module.l = true;
        /******/
        /******/ // Return the exports of the module
        /******/
        return module.exports;
        /******/
    }
    /******/
    /******/
    /******/ // expose the modules object (__webpack_modules__)
    /******/
    __webpack_require__.m = modules;
    /******/
    /******/ // expose the module cache
    /******/
    __webpack_require__.c = installedModules;
    /******/
    /******/ // define getter function for harmony exports
    /******/
    __webpack_require__.d = function(exports, name, getter) {
        /******/
        if (!__webpack_require__.o(exports, name)) {
            /******/
            Object.defineProperty(exports, name, { enumerable: true, get: getter });
            /******/
        }
        /******/
    };
    /******/
    /******/ // define __esModule on exports
    /******/
    __webpack_require__.r = function(exports) {
        /******/
        if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
            /******/
            Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
            /******/
        }
        /******/
        Object.defineProperty(exports, '__esModule', { value: true });
        /******/
    };
    /******/
    /******/ // create a fake namespace object
    /******/ // mode & 1: value is a module id, require it
    /******/ // mode & 2: merge all properties of value into the ns
    /******/ // mode & 4: return value when already ns object
    /******/ // mode & 8|1: behave like require
    /******/
    __webpack_require__.t = function(value, mode) {
        /******/
        if (mode & 1) value = __webpack_require__(value);
        /******/
        if (mode & 8) return value;
        /******/
        if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
        /******/
        var ns = Object.create(null);
        /******/
        __webpack_require__.r(ns);
        /******/
        Object.defineProperty(ns, 'default', { enumerable: true, value: value });
        /******/
        if (mode & 2 && typeof value != 'string')
            for (var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
        /******/
        return ns;
        /******/
    };
    /******/
    /******/ // getDefaultExport function for compatibility with non-harmony modules
    /******/
    __webpack_require__.n = function(module) {
        /******/
        var getter = module && module.__esModule ?
            /******/
            function getDefault() { return module['default']; } :
            /******/
            function getModuleExports() { return module; };
        /******/
        __webpack_require__.d(getter, 'a', getter);
        /******/
        return getter;
        /******/
    };
    /******/
    /******/ // Object.prototype.hasOwnProperty.call
    /******/
    __webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
    /******/
    /******/ // __webpack_public_path__
    /******/
    __webpack_require__.p = "";
    /******/
    /******/
    /******/ // Load entry module and return exports
    /******/
    return __webpack_require__(__webpack_require__.s = "../src/assets/js/pages/custom/user/list-datatable.js");
    /******/
})
/************************************************************************/
/******/
({

    /***/
    "../src/assets/js/pages/custom/user/list-datatable.js":
    /*!************************************************************!*\
      !*** ../src/assets/js/pages/custom/user/list-datatable.js ***!
      \************************************************************/
    /*! no static exports found */
    /***/
        (function(module, exports, __webpack_require__) {

        "use strict";
        eval("\r\n// Class definition\r\n\r\nvar KTUserListDatatable = function() {\r\n\r\n\t// variables\r\n\tvar datatable;\r\n\r\n\t// init\r\n\tvar init = function() {\r\n\t\t// init the datatables. Learn more: https://keenthemes.com/metronic/?page=docs&section=datatable\r\n\t\tdatatable = $('#kt_apps_user_list_datatable').KTDatatable({\r\n\t\t\t// datasource definition\r\n\t\t\tdata: {\r\n\t\t\t\ttype: 'remote',\r\n\t\t\t\tsource: {\r\n\t\t\t\t\tread: {\r\n\t\t\t\t\t\turl: '/admin/users_ajax',\r\n\t\t\t\t\t},\r\n\t\t\t\t},\r\n\t\t\t\tpageSize: 10, // display 20 records per page\r\n\t\t\t\tserverPaging: true,\r\n\t\t\t\tserverFiltering: true,\r\n\t\t\t\tserverSorting: true,\r\n\t\t\t},\r\n\r\n\t\t\t// layout definition\r\n\t\t\tlayout: {\r\n\t\t\t\tscroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.\r\n\t\t\t\tfooter: false, // display/hide footer\r\n\t\t\t},\r\n\r\n\t\t\t// column sorting\r\n\t\t\tsortable: true,\r\n\r\n\t\t\tpagination: true,\r\n\r\n\t\t\tsearch: {\r\n\t\t\t\tinput: $('#generalSearch'),\r\n\t\t\t\tdelay: 400,\r\n\t\t\t},\r\n\r\n\t\t\t// columns definition\r\n\t\t\tcolumns: [{\r\n\t\t\t\tfield: 'RecordID',\r\n\t\t\t\ttitle: '#',\r\n\t\t\t\tsortable: false,\r\n\t\t\t\twidth: 20,\r\n\t\t\t\tselector: {\r\n\t\t\t\t\tclass: 'kt-checkbox--solid'\r\n\t\t\t\t},\r\n\t\t\t\ttextAlign: 'center',\r\n\t\t\t}, {\r\n\t\t\t\tfield: \"AgentName\",\r\n\t\t\t\ttitle: \"الإسم\",\r\n\t\t\t\twidth: 200,\r\n\t\t\t\t// callback function support for column rendering\r\n\t\t\t\ttemplate: function(data, i) {\r\n\t\t\t\t\tvar number = 4 + i;\r\n\t\t\t\t\twhile (number > 12) {\r\n\t\t\t\t\t\tnumber = number - 3;\r\n\t\t\t\t\t}\r\n\t\t\t\t\tvar user_img = '100_' + number + '.jpg';\r\n\r\n\t\t\t\t\tvar pos = KTUtil.getRandomInt(0, 5);\r\n\t\t\t\t\tvar position = [\r\n\t\t\t\t\t\t'Developer',\r\n\t\t\t\t\t\t'Designer',\r\n\t\t\t\t\t\t'CEO',\r\n\t\t\t\t\t\t'Manager',\r\n\t\t\t\t\t\t'Architect',\r\n\t\t\t\t\t\t'Sales'\r\n\t\t\t\t\t];\r\n\r\n\t\t\t\t\tvar output = '';\r\n\t\t\t\t\tif (number > 5) {\r\n\t\t\t\t\t\toutput = '<div class=\"kt-user-card-v2\">\\\r\n\t\t\t\t\t\t\t\t<div class=\"kt-user-card-v2__pic\">\\\r\n\t\t\t\t\t\t\t\t\t<img src=\"assets/media/users/' + user_img + '\" alt=\"photo\">\\\r\n\t\t\t\t\t\t\t\t</div>\\\r\n\t\t\t\t\t\t\t\t<div class=\"kt-user-card-v2__details\">\\\r\n\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-user-card-v2__name\">' + data.CompanyAgent + '</a>\\\r\n\t\t\t\t\t\t\t\t\t<span class=\"kt-user-card-v2__desc\">' + position[pos] + '</span>\\\r\n\t\t\t\t\t\t\t\t</div>\\\r\n\t\t\t\t\t\t\t</div>';\r\n\t\t\t\t\t} else {\r\n\t\t\t\t\t\tvar stateNo = KTUtil.getRandomInt(0, 6);\r\n\t\t\t\t\t\tvar states = [\r\n\t\t\t\t\t\t\t'success',\r\n\t\t\t\t\t\t\t'brand',\r\n\t\t\t\t\t\t\t'danger',\r\n\t\t\t\t\t\t\t'success',\r\n\t\t\t\t\t\t\t'warning',\r\n\t\t\t\t\t\t\t'primary',\r\n\t\t\t\t\t\t\t'info'\r\n\t\t\t\t\t\t];\r\n\t\t\t\t\t\tvar state = states[stateNo];\r\n\r\n\t\t\t\t\t\toutput = '<div class=\"kt-user-card-v2\">\\\r\n\t\t\t\t\t\t\t\t<div class=\"kt-user-card-v2__pic\">\\\r\n\t\t\t\t\t\t\t\t\t<div class=\"kt-badge kt-badge--xl kt-badge--' + state + '\">' + data.CompanyAgent.substring(0, 1) + '</div>\\\r\n\t\t\t\t\t\t\t\t</div>\\\r\n\t\t\t\t\t\t\t\t<div class=\"kt-user-card-v2__details\">\\\r\n\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-user-card-v2__name\">' + data.CompanyAgent + '</a>\\\r\n\t\t\t\t\t\t\t\t\t<span class=\"kt-user-card-v2__desc\">' + position[pos] + '</span>\\\r\n\t\t\t\t\t\t\t\t</div>\\\r\n\t\t\t\t\t\t\t</div>';\r\n\t\t\t\t\t}\r\n\r\n\t\t\t\t\treturn output;\r\n\t\t\t\t}\r\n\t\t\t}, {\r\n\t\t\t\tfield: 'Country',\r\n\t\t\t\ttitle: 'Country',\r\n\t\t\t\ttemplate: function(row) {\r\n\t\t\t\t\treturn row.email + ' ' + row.created_at;\r\n\t\t\t\t},\r\n\t\t\t}, {\r\n\t\t\t\tfield: 'ShipDate',\r\n\t\t\t\ttitle: 'Ship Date',\r\n\t\t\t\ttype: 'date',\r\n\t\t\t\tformat: 'MM/DD/YYYY',\r\n\t\t\t}, {\r\n\t\t\t\tfield: \"ShipName\",\r\n\t\t\t\ttitle: \"Company\",\r\n\t\t\t\twidth: 'auto',\r\n\t\t\t\tautoHide: false,\r\n\t\t\t\t// callback function support for column rendering\r\n\t\t\t\ttemplate: function(data, i) {\r\n\t\t\t\t\tvar number = i + 1;\r\n\t\t\t\t\twhile (number > 5) {\r\n\t\t\t\t\t\tnumber = number - 3;\r\n\t\t\t\t\t}\r\n\t\t\t\t\tvar img = number + '.png';\r\n\r\n\t\t\t\t\tvar skills = [\r\n\t\t\t\t\t\t'Angular, React',\r\n\t\t\t\t\t\t'Vue, Kendo',\r\n\t\t\t\t\t\t'.NET, Oracle, MySQL',\r\n\t\t\t\t\t\t'Node, SASS, Webpack',\r\n\t\t\t\t\t\t'MangoDB, Java',\r\n\t\t\t\t\t\t'HTML5, jQuery, CSS3'\r\n\t\t\t\t\t];\r\n\r\n\t\t\t\t\tvar output = '\\\r\n                        <div class=\"kt-user-card-v2\">\\\r\n                            <div class=\"kt-user-card-v2__pic\">\\\r\n                                <img src=\"assets/media/client-logos/logo' + img + '\" alt=\"photo\">\\\r\n                            </div>\\\r\n                            <div class=\"kt-user-card-v2__details\">\\\r\n                                <a href=\"#\" class=\"kt-user-card-v2__name\">' + data.CompanyName + '</a>\\\r\n                                <span class=\"kt-user-card-v2__email\">' +\r\n\t\t\t\t\t\tskills[number - 1] + '</span>\\\r\n                            </div>\\\r\n                        </div>';\r\n\r\n\t\t\t\t\treturn output;\r\n\t\t\t\t}\r\n\t\t\t}, {\r\n\t\t\t\tfield: \"Status\",\r\n\t\t\t\ttitle: \"Status\",\r\n\t\t\t\twidth: 100,\r\n\t\t\t\t// callback function support for column rendering\r\n\t\t\t\ttemplate: function(row) {\r\n\t\t\t\t\tvar status = {\r\n\t\t\t\t\t\t1: {\r\n\t\t\t\t\t\t\t'title': 'Pending',\r\n\t\t\t\t\t\t\t'class': ' btn-label-brand'\r\n\t\t\t\t\t\t},\r\n\t\t\t\t\t\t2: {\r\n\t\t\t\t\t\t\t'title': 'Processing',\r\n\t\t\t\t\t\t\t'class': ' btn-label-danger'\r\n\t\t\t\t\t\t},\r\n\t\t\t\t\t\t3: {\r\n\t\t\t\t\t\t\t'title': 'Success',\r\n\t\t\t\t\t\t\t'class': ' btn-label-success'\r\n\t\t\t\t\t\t},\r\n\t\t\t\t\t\t4: {\r\n\t\t\t\t\t\t\t'title': 'Delivered',\r\n\t\t\t\t\t\t\t'class': ' btn-label-success'\r\n\t\t\t\t\t\t},\r\n\t\t\t\t\t\t5: {\r\n\t\t\t\t\t\t\t'title': 'Canceled',\r\n\t\t\t\t\t\t\t'class': ' btn-label-warning'\r\n\t\t\t\t\t\t},\r\n\t\t\t\t\t\t6: {\r\n\t\t\t\t\t\t\t'title': 'Done',\r\n\t\t\t\t\t\t\t'class': ' btn-label-danger'\r\n\t\t\t\t\t\t},\r\n\t\t\t\t\t\t7: {\r\n\t\t\t\t\t\t\t'title': 'On Hold',\r\n\t\t\t\t\t\t\t'class': ' btn-label-warning'\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t};\r\n\t\t\t\t\treturn '<span class=\"btn btn-bold btn-sm btn-font-sm ' + status[row.status].class + '\">' + status[row.status].title + '</span>';\r\n\t\t\t\t}\r\n\t\t\t}, {\r\n\t\t\t\twidth: 110,\r\n\t\t\t\tfield: 'Type',\r\n\t\t\t\ttitle: 'Type',\r\n\t\t\t\tautoHide: false,\r\n\t\t\t\t// callback function support for column rendering\r\n\t\t\t\ttemplate: function(row) {\r\n\t\t\t\t\tvar status = {\r\n\t\t\t\t\t\t1: {'title': 'Online', 'state': 'danger'},\r\n\t\t\t\t\t\t2: {'title': 'Retail', 'state': 'primary'},\r\n\t\t\t\t\t\t3: {'title': 'Direct', 'state': 'success'},\r\n\t\t\t\t\t};\r\n\t\t\t\t\treturn '<span class=\"kt-badge kt-badge--' + status[row.type].state + ' kt-badge--dot\"></span>&nbsp;<span class=\"kt-font-bold kt-font-' + status[row.type].state + '\">' +\r\n\t\t\t\t\t\t\tstatus[row.type].title + '</span>';\r\n\t\t\t\t},\r\n\t\t\t}, {\r\n\t\t\t\tfield: \"Actions\",\r\n\t\t\t\twidth: 80,\r\n\t\t\t\ttitle: \"Actions\",\r\n\t\t\t\tsortable: false,\r\n\t\t\t\tautoHide: false,\r\n\t\t\t\toverflow: 'visible',\r\n\t\t\t\ttemplate: function() {\r\n\t\t\t\t\treturn '\\\r\n\t\t\t\t\t\t\t<div class=\"dropdown\">\\\r\n\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-sm btn-clean btn-icon btn-icon-md\" data-toggle=\"dropdown\">\\\r\n\t\t\t\t\t\t\t\t\t<i class=\"flaticon-more-1\"></i>\\\r\n\t\t\t\t\t\t\t\t</a>\\\r\n\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">\\\r\n\t\t\t\t\t\t\t\t\t<ul class=\"kt-nav\">\\\r\n\t\t\t\t\t\t\t\t\t\t<li class=\"kt-nav__item\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-nav__link\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"kt-nav__link-icon flaticon2-expand\"></i>\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">View</span>\\\r\n\t\t\t\t\t\t\t\t\t\t\t</a>\\\r\n\t\t\t\t\t\t\t\t\t\t</li>\\\r\n\t\t\t\t\t\t\t\t\t\t<li class=\"kt-nav__item\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-nav__link\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"kt-nav__link-icon flaticon2-contract\"></i>\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">Edit</span>\\\r\n\t\t\t\t\t\t\t\t\t\t\t</a>\\\r\n\t\t\t\t\t\t\t\t\t\t</li>\\\r\n\t\t\t\t\t\t\t\t\t\t<li class=\"kt-nav__item\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-nav__link\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"kt-nav__link-icon flaticon2-trash\"></i>\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">Delete</span>\\\r\n\t\t\t\t\t\t\t\t\t\t\t</a>\\\r\n\t\t\t\t\t\t\t\t\t\t</li>\\\r\n\t\t\t\t\t\t\t\t\t\t<li class=\"kt-nav__item\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-nav__link\">\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"kt-nav__link-icon flaticon2-mail-1\"></i>\\\r\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">Export</span>\\\r\n\t\t\t\t\t\t\t\t\t\t\t</a>\\\r\n\t\t\t\t\t\t\t\t\t\t</li>\\\r\n\t\t\t\t\t\t\t\t\t</ul>\\\r\n\t\t\t\t\t\t\t\t</div>\\\r\n\t\t\t\t\t\t\t</div>\\\r\n\t\t\t\t\t\t';\r\n\t\t\t\t},\r\n\t\t\t}]\r\n\t\t});\r\n\t}\r\n\r\n\t// search\r\n\tvar search = function() {\r\n\t\t$('#kt_form_status').on('change', function() {\r\n\t\t\tdatatable.search($(this).val().toLowerCase(), 'Status');\r\n\t\t});\r\n\t}\r\n\r\n\t// selection\r\n\tvar selection = function() {\r\n\t\t// init form controls\r\n\t\t//$('#kt_form_status, #kt_form_type').selectpicker();\r\n\r\n\t\t// event handler on check and uncheck on records\r\n\t\tdatatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated',\tfunction(e) {\r\n\t\t\tvar checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records\r\n\t\t\tvar count = checkedNodes.length; // selected records count\r\n\r\n\t\t\t$('#kt_subheader_group_selected_rows').html(count);\r\n\t\t\t\t\r\n\t\t\tif (count > 0) {\r\n\t\t\t\t$('#kt_subheader_search').addClass('kt-hidden');\r\n\t\t\t\t$('#kt_subheader_group_actions').removeClass('kt-hidden');\r\n\t\t\t} else {\r\n\t\t\t\t$('#kt_subheader_search').removeClass('kt-hidden');\r\n\t\t\t\t$('#kt_subheader_group_actions').addClass('kt-hidden');\r\n\t\t\t}\r\n\t\t});\r\n\t}\r\n\r\n\t// fetch selected records\r\n\tvar selectedFetch = function() {\r\n\t\t// event handler on selected records fetch modal launch\r\n\t\t$('#kt_datatable_records_fetch_modal').on('show.bs.modal', function(e) {\r\n\t\t\t// show loading dialog\r\n            var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': 'Loading ...'});\r\n            loading.show();\r\n\r\n            setTimeout(function() {\r\n                loading.hide();\r\n\t\t\t}, 1000);\r\n\t\t\t\r\n\t\t\t// fetch selected IDs\r\n\t\t\tvar ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function(i, chk) {\r\n\t\t\t\treturn $(chk).val();\r\n\t\t\t});\r\n\r\n\t\t\t// populate selected IDs\r\n\t\t\tvar c = document.createDocumentFragment();\r\n\t\t\t\t\r\n\t\t\tfor (var i = 0; i < ids.length; i++) {\r\n\t\t\t\tvar li = document.createElement('li');\r\n\t\t\t\tli.setAttribute('data-id', ids[i]);\r\n\t\t\t\tli.innerHTML = 'Selected record ID: ' + ids[i];\r\n\t\t\t\tc.appendChild(li);\r\n\t\t\t}\r\n\r\n\t\t\t$(e.target).find('#kt_apps_user_fetch_records_selected').append(c);\r\n\t\t}).on('hide.bs.modal', function(e) {\r\n\t\t\t$(e.target).find('#kt_apps_user_fetch_records_selected').empty();\r\n\t\t});\r\n\t};\r\n\r\n\t// selected records status update\r\n\tvar selectedStatusUpdate = function() {\r\n\t\t$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function() {\r\n\t\t\tvar status = $(this).find(\".kt-nav__link-text\").html();\r\n\r\n\t\t\t// fetch selected IDs\r\n\t\t\tvar ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function(i, chk) {\r\n\t\t\t\treturn $(chk).val();\r\n\t\t\t});\r\n\r\n\t\t\tif (ids.length > 0) {\r\n\t\t\t\t// learn more: https://sweetalert2.github.io/\r\n\t\t\t\tswal.fire({\r\n\t\t\t\t\tbuttonsStyling: false,\r\n\r\n\t\t\t\t\thtml: \"Are you sure to update \" + ids.length + \" selected records status to \" + status + \" ?\",\r\n\t\t\t\t\ttype: \"info\",\r\n\t\r\n\t\t\t\t\tconfirmButtonText: \"Yes, update!\",\r\n\t\t\t\t\tconfirmButtonClass: \"btn btn-sm btn-bold btn-brand\",\r\n\t\r\n\t\t\t\t\tshowCancelButton: true,\r\n\t\t\t\t\tcancelButtonText: \"No, cancel\",\r\n\t\t\t\t\tcancelButtonClass: \"btn btn-sm btn-bold btn-default\"\r\n\t\t\t\t}).then(function(result) {\r\n\t\t\t\t\tif (result.value) {\r\n\t\t\t\t\t\tswal.fire({\r\n\t\t\t\t\t\t\ttitle: 'Deleted!',\r\n\t\t\t\t\t\t\ttext: 'Your selected records statuses have been updated!',\r\n\t\t\t\t\t\t\ttype: 'success',\r\n\t\t\t\t\t\t\tbuttonsStyling: false,\r\n\t\t\t\t\t\t\tconfirmButtonText: \"OK\",\r\n\t\t\t\t\t\t\tconfirmButtonClass: \"btn btn-sm btn-bold btn-brand\",\r\n\t\t\t\t\t\t})\r\n\t\t\t\t\t\t// result.dismiss can be 'cancel', 'overlay',\r\n\t\t\t\t\t\t// 'close', and 'timer'\r\n\t\t\t\t\t} else if (result.dismiss === 'cancel') {\r\n\t\t\t\t\t\tswal.fire({\r\n\t\t\t\t\t\t\ttitle: 'Cancelled',\r\n\t\t\t\t\t\t\ttext: 'You selected records statuses have not been updated!',\r\n\t\t\t\t\t\t\ttype: 'error',\r\n\t\t\t\t\t\t\tbuttonsStyling: false,\r\n\t\t\t\t\t\t\tconfirmButtonText: \"OK\",\r\n\t\t\t\t\t\t\tconfirmButtonClass: \"btn btn-sm btn-bold btn-brand\",\r\n\t\t\t\t\t\t});\r\n\t\t\t\t\t}\r\n\t\t\t\t});\r\n\t\t\t}\r\n\t\t});\r\n\t}\r\n\r\n\t// selected records delete\r\n\tvar selectedDelete = function() {\r\n\t\t$('#kt_subheader_group_actions_delete_all').on('click', function() {\r\n\t\t\t// fetch selected IDs\r\n\t\t\tvar ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function(i, chk) {\r\n\t\t\t\treturn $(chk).val();\r\n\t\t\t});\r\n\r\n\t\t\tif (ids.length > 0) {\r\n\t\t\t\t// learn more: https://sweetalert2.github.io/\r\n\t\t\t\tswal.fire({\r\n\t\t\t\t\tbuttonsStyling: false,\r\n\r\n\t\t\t\t\ttext: \"Are you sure to delete \" + ids.length + \" selected records ?\",\r\n\t\t\t\t\ttype: \"danger\",\r\n\r\n\t\t\t\t\tconfirmButtonText: \"Yes, delete!\",\r\n\t\t\t\t\tconfirmButtonClass: \"btn btn-sm btn-bold btn-danger\",\r\n\r\n\t\t\t\t\tshowCancelButton: true,\r\n\t\t\t\t\tcancelButtonText: \"No, cancel\",\r\n\t\t\t\t\tcancelButtonClass: \"btn btn-sm btn-bold btn-brand\"\r\n\t\t\t\t}).then(function(result) {\r\n\t\t\t\t\tif (result.value) {\r\n\t\t\t\t\t\tswal.fire({\r\n\t\t\t\t\t\t\ttitle: 'Deleted!',\r\n\t\t\t\t\t\t\ttext: 'Your selected records have been deleted! :(',\r\n\t\t\t\t\t\t\ttype: 'success',\r\n\t\t\t\t\t\t\tbuttonsStyling: false,\r\n\t\t\t\t\t\t\tconfirmButtonText: \"OK\",\r\n\t\t\t\t\t\t\tconfirmButtonClass: \"btn btn-sm btn-bold btn-brand\",\r\n\t\t\t\t\t\t})\r\n\t\t\t\t\t\t// result.dismiss can be 'cancel', 'overlay',\r\n\t\t\t\t\t\t// 'close', and 'timer'\r\n\t\t\t\t\t} else if (result.dismiss === 'cancel') {\r\n\t\t\t\t\t\tswal.fire({\r\n\t\t\t\t\t\t\ttitle: 'Cancelled',\r\n\t\t\t\t\t\t\ttext: 'You selected records have not been deleted! :)',\r\n\t\t\t\t\t\t\ttype: 'error',\r\n\t\t\t\t\t\t\tbuttonsStyling: false,\r\n\t\t\t\t\t\t\tconfirmButtonText: \"OK\",\r\n\t\t\t\t\t\t\tconfirmButtonClass: \"btn btn-sm btn-bold btn-brand\",\r\n\t\t\t\t\t\t});\r\n\t\t\t\t\t}\r\n\t\t\t\t});\r\n\t\t\t}\r\n\t\t});\t\t\r\n\t}\r\n\r\n\tvar updateTotal = function() {\r\n\t\tdatatable.on('kt-datatable--on-layout-updated', function () {\r\n\t\t\t//$('#kt_subheader_total').html(datatable.getTotalRows() + ' Total');\r\n\t\t});\r\n\t};\r\n\r\n\treturn {\r\n\t\t// public functions\r\n\t\tinit: function() {\r\n\t\t\tinit();\r\n\t\t\tsearch();\r\n\t\t\tselection();\r\n\t\t\tselectedFetch();\r\n\t\t\tselectedStatusUpdate();\r\n\t\t\tselectedDelete();\r\n\t\t\tupdateTotal();\r\n\t\t},\r\n\t};\r\n}();\r\n\r\n// On document ready\r\nKTUtil.ready(function() {\r\n\tKTUserListDatatable.init();\r\n});\r\n\n\n//# sourceURL=webpack:///../src/assets/js/pages/custom/user/list-datatable.js?");

        /***/
    })

    /******/
});
