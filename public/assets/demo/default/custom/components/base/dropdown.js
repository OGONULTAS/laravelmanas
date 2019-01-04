var DropdownDemo = function() {
    var o = function() {
        var o = $("#m_dropdown_api_output"),
            n = $("#m_dropdown_api_1"),
            e = $("#m_dropdown_api_2");
        n.mDropdown().on("afterShow", function(n) {
            o.append("<p>Dropdown 1: afterShow event fired</p>")
        }), n.mDropdown().on("beforeShow", function(n) {
            o.append("<p>Dropdown 1: beforeShow event fired</p>")
        }), n.mDropdown().on("afterHide", function(n) {
            o.append("<p>Dropdown 1: afterHide event fired</p>")
        }), n.mDropdown().on("beforeHide", function(n) {
            o.append("<p>Dropdown 1: beforeHide event fired</p>")
        }), e.mDropdown().on("afterShow", function(n) {
            o.append("<p>Dropdown 2: afterShow event fired</p>")
        }), e.mDropdown().on("beforeShow", function(n) {
            o.append("<p>Dropdown 2: beforeShow event fired</p>")
        }), e.mDropdown().on("afterHide", function(n) {
            o.append("<p>Dropdown 2: afterHide event fired</p>")
        }), e.mDropdown().on("beforeHide", function(n) {
            o.append("<p>Dropdown 2: beforeHide event fired</p>")
        })
    };
    return {
        init: function() {
            o()
        }
    }
}();
jQuery(document).ready(function() {
    DropdownDemo.init()
});