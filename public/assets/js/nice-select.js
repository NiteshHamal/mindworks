/*  jQuery Nice Select - v1.0
    https://github.com/hernansartorio/jquery-nice-select
    Made by HernÃ¡n Sartorio  */
// !(function (e) {
//     e.fn.niceSelect = function (t) {
//         function s(t) {
//             t.after(
//                 e("<div></div>")
//                     .addClass("nice-select")
//                     .addClass(t.attr("class") || "")
//                     .addClass(t.attr("disabled") ? "disabled" : "")
//                     .attr("tabindex", t.attr("disabled") ? null : "0")
//                     .html('<span class="current"></span><ul class="list"></ul>')
//             );
//             var s = t.next(),
//                 n = t.find("option"),
//                 i = t.find("option:selected");
//             s.find(".current").html(i.data("display") || i.text()),
//                 n.each(function (t) {
//                     var n = e(this),
//                         i = n.data("display");
//                     s.find("ul").append(
//                         e("<li></li>")
//                             .attr("data-value", n.val())
//                             .attr("data-display", i || null)
//                             .addClass(
//                                 "option" +
//                                     (n.is(":selected") ? " selected" : "") +
//                                     (n.is(":disabled") ? " disabled" : "")
//                             )
//                             .html(n.text())
//                     );
//                 });
//         }
//         if ("string" == typeof t)
//             return (
//                 "update" == t
//                     ? this.each(function () {
//                           var t = e(this),
//                               n = e(this).next(".nice-select"),
//                               i = n.hasClass("open");
//                           n.length &&
//                               (n.remove(),
//                               s(t),
//                               i && t.next().trigger("click"));
//                       })
//                     : "destroy" == t
//                     ? (this.each(function () {
//                           var t = e(this),
//                               s = e(this).next(".nice-select");
//                           s.length && (s.remove(), t.css("display", ""));
//                       }),
//                       0 == e(".nice-select").length &&
//                           e(document).off(".nice_select"))
//                     : console.log('Method "' + t + '" does not exist.'),
//                 this
//             );
//         this.hide(),
//             this.each(function () {
//                 var t = e(this);
//                 t.next().hasClass("nice-select") || s(t);
//             }),
//             e(document).off(".nice_select"),
//             e(document).on("click.nice_select", ".nice-select", function (t) {
//                 var s = e(this);
//                 e(".nice-select").not(s).removeClass("open"),
//                     s.toggleClass("open"),
//                     s.hasClass("open")
//                         ? (s.find(".option"),
//                           s.find(".focus").removeClass("focus"),
//                           s.find(".selected").addClass("focus"))
//                         : s.focus();
//             }),
//             e(document).on("click.nice_select", function (t) {
//                 0 === e(t.target).closest(".nice-select").length &&
//                     e(".nice-select").removeClass("open").find(".option");
//             }),
//             e(document).on(
//                 "click.nice_select",
//                 ".nice-select .option:not(.disabled)",
//                 function (t) {
//                     var s = e(this),
//                         n = s.closest(".nice-select");
//                     n.find(".selected").removeClass("selected"),
//                         s.addClass("selected");
//                     var i = s.data("display") || s.text();
//                     n.find(".current").text(i),
//                         n.prev("select").val(s.data("value")).trigger("change");
//                 }
//             ),
//             e(document).on("keydown.nice_select", ".nice-select", function (t) {
//                 var s = e(this),
//                     n = e(s.find(".focus") || s.find(".list .option.selected"));
//                 if (32 == t.keyCode || 13 == t.keyCode)
//                     return (
//                         s.hasClass("open")
//                             ? n.trigger("click")
//                             : s.trigger("click"),
//                         !1
//                     );
//                 if (40 == t.keyCode) {
//                     if (s.hasClass("open")) {
//                         var i = n.nextAll(".option:not(.disabled)").first();
//                         i.length > 0 &&
//                             (s.find(".focus").removeClass("focus"),
//                             i.addClass("focus"));
//                     } else s.trigger("click");
//                     return !1;
//                 }
//                 if (38 == t.keyCode) {
//                     if (s.hasClass("open")) {
//                         var l = n.prevAll(".option:not(.disabled)").first();
//                         l.length > 0 &&
//                             (s.find(".focus").removeClass("focus"),
//                             l.addClass("focus"));
//                     } else s.trigger("click");
//                     return !1;
//                 }
//                 if (27 == t.keyCode) s.hasClass("open") && s.trigger("click");
//                 else if (9 == t.keyCode && s.hasClass("open")) return !1;
//             });
//         var n = document.createElement("a").style;
//         return (
//             (n.cssText = "pointer-events:auto"),
//             "auto" !== n.pointerEvents &&
//                 e("html").addClass("no-csspointerevents"),
//             this
//         );
//     };
// })(jQuery);



// !(function (e) {
//     e.fn.niceSelect = function (t) {
//         function s(t) {
//             var multiple = t.hasClass('multiple');
//             t.after(
//                 e("<div></div>")
//                     .addClass("nice-select")
//                     .addClass(t.attr("class") || "")
//                     .addClass(t.attr("disabled") ? "disabled" : "")
//                     .attr("tabindex", t.attr("disabled") ? null : "0")
//                     .html('<span class="current"></span><ul class="list"></ul>')
//             );
//             var s = t.next(),
//                 n = t.find("option"),
//                 i = t.find("option:selected");
//             s.find(".current").html(i.data("display") || i.text()),
//                 n.each(function (t) {
//                     var n = e(this),
//                         i = n.data("display");
//                     s.find("ul").append(
//                         e("<li></li>")
//                             .attr("data-value", n.val())
//                             .attr("data-display", i || null)
//                             .addClass(
//                                 "option" +
//                                     (n.is(":selected") ? " selected" : "") +
//                                     (n.is(":disabled") ? " disabled" : "")
//                             )
//                             .html(n.text())
//                     );
//                 });
//         }
//         if ("string" == typeof t)
//             return (
//                 "update" == t
//                     ? this.each(function () {
//                           var t = e(this),
//                               n = e(this).next(".nice-select"),
//                               i = n.hasClass("open");
//                           n.length &&
//                               (n.remove(),
//                               s(t),
//                               i && t.next().trigger("click"));
//                       })
//                     : "destroy" == t
//                     ? (this.each(function () {
//                           var t = e(this),
//                               s = e(this).next(".nice-select");
//                           s.length && (s.remove(), t.css("display", ""));
//                       }),
//                       0 == e(".nice-select").length &&
//                           e(document).off(".nice_select"))
//                     : console.log('Method "' + t + '" does not exist.'),
//                 this
//             );
//         this.hide(),
//             this.each(function () {
//                 var t = e(this);
//                 t.next().hasClass("nice-select") || s(t);
//             }),
//             e(document).off(".nice_select"),
//             e(document).on("click.nice_select", ".nice-select", function (t) {
//                 var s = e(this);
//                 e(".nice-select").not(s).removeClass("open"),
//                     s.toggleClass("open"),
//                     s.hasClass("open")
//                         ? (s.find(".option"),
//                           s.find(".focus").removeClass("focus"),
//                           s.find(".selected").addClass("focus"))
//                         : s.focus();
//             }),
//             e(document).on("click.nice_select", function (t) {
//                 0 === e(t.target).closest(".nice-select").length &&
//                     e(".nice-select").removeClass("open").find(".option");
//             }),
//             e(document).on(
//                 "click.nice_select",
//                 ".nice-select .option:not(.disabled)",
//                 function (t) {
//                     var s = e(this),
//                         n = s.closest(".nice-select"),
//                         i = n.prev("select");

//                     if (!n.hasClass("multiple")) {
//                         n.find(".selected").removeClass("selected");
//                         s.addClass("selected");
//                         var l = s.data("display") || s.text();
//                         n.find(".current").text(l);
//                     } else {
//                         s.toggleClass("selected");
//                         var selectedOptions = n.find(".selected").map(function () {
//                             return e(this).text();
//                         }).get().join(', ');
//                         n.find(".current").text(selectedOptions);
//                     }

//                     i.val(
//                         n.find(".selected").map(function () {
//                             return e(this).data("value");
//                         }).get()
//                     ).trigger("change");
//                 }
//             ),
//             e(document).on("keydown.nice_select", ".nice-select", function (t) {
//                 var s = e(this),
//                     n = e(s.find(".focus") || s.find(".list .option.selected"));
//                 if (32 == t.keyCode || 13 == t.keyCode)
//                     return (
//                         s.hasClass("open")
//                             ? n.trigger("click")
//                             : s.trigger("click"),
//                         !1
//                     );
//                 if (40 == t.keyCode) {
//                     if (s.hasClass("open")) {
//                         var i = n.nextAll(".option:not(.disabled)").first();
//                         i.length > 0 &&
//                             (s.find(".focus").removeClass("focus"),
//                             i.addClass("focus"));
//                     } else s.trigger("click");
//                     return !1;
//                 }
//                 if (38 == t.keyCode) {
//                     if (s.hasClass("open")) {
//                         var l = n.prevAll(".option:not(.disabled)").first();
//                         l.length > 0 &&
//                             (s.find(".focus").removeClass("focus"),
//                             l.addClass("focus"));
//                     } else s.trigger("click");
//                     return !1;
//                 }
//                 if (27 == t.keyCode) s.hasClass("open") && s.trigger("click");
//                 else if (9 == t.keyCode && s.hasClass("open")) return !1;
//             });
//         var n = document.createElement("a").style;
//         return (
//             (n.cssText = "pointer-events:auto"),
//             "auto" !== n.pointerEvents &&
//                 e("html").addClass("no-csspointerevents"),
//             this
//         );
//     };
// })(jQuery);



// (function(e) {
//     e.fn.niceSelect = function(t) {
//         function s(t) {
//             var multiple = t.hasClass('multiple');
//             t.after(
//                 e("<div></div>")
//                     .addClass("nice-select")
//                     .addClass(t.attr("class") || "")
//                     .addClass(t.attr("disabled") ? "disabled" : "")
//                     .attr("tabindex", t.attr("disabled") ? null : "0")
//                     .html('<span class="current"></span><ul class="list"></ul>')
//             );
//             var s = t.next(),
//                 n = t.find("option"),
//                 i = t.find("option:selected");
//             s.find(".current").html(i.data("display") || i.text()),
//                 n.each(function(t) {
//                     var n = e(this),
//                         i = n.data("display");
//                     s.find("ul").append(
//                         e("<li></li>")
//                             .attr("data-value", n.val())
//                             .attr("data-display", i || null)
//                             .addClass(
//                                 "option" +
//                                 (n.is(":selected") ? " selected" : "") +
//                                 (n.is(":disabled") ? " disabled" : "")
//                             )
//                             .html(n.text())
//                     );
//                 });
//         }

//         this.hide(),
//             this.each(function() {
//                 var t = e(this);
//                 t.next().hasClass("nice-select") || s(t);
//             }),
//             e(document).on(
//                 "click.nice_select",
//                 ".nice-select .option:not(.disabled)",
//                 function(t) {
//                     var s = e(this),
//                         n = s.closest(".nice-select"),
//                         i = n.prev("select");

//                     if (!n.hasClass("multiple")) {
//                         n.find(".selected").removeClass("selected");
//                         s.addClass("selected");
//                         var l = s.data("display") || s.text();
//                         n.find(".current").text(l);
//                     } else {
//                         s.toggleClass("selected");
//                         var selectedOptions = n.find(".selected").map(function() {
//                             return e(this).text();
//                         }).get().join(',\n');
//                         n.find(".current").text(selectedOptions);
//                     }

//                     i.val(
//                         n.find(".selected").map(function() {
//                             return e(this).data("value");
//                         }).get()
//                     ).trigger("change");

//                     var selectedValues = n.find(".selected").map(function() {
//                         return e(this).text();
//                     }).get().join(', ');
//                     e("#services").val(selectedValues);
//                 }
//             );

//         e(document).on("click.nice_select", function(t) {
//             if (e(t.target).closest(".nice-select").length === 0) {
//                 e(".nice-select").removeClass("open");
//             }
//         });

//         e(document).on("click.nice_select", ".nice-select", function(t) {
//             var s = e(this);
//             e(".nice-select").not(s).removeClass("open");
//             s.toggleClass("open");
//         });

//         e(document).on("keydown.nice_select", ".nice-select", function(t) {
//             var s = e(this),
//                 n = e(s.find(".focus") || s.find(".list .option.selected"));
//             if (t.keyCode == 32 || t.keyCode == 13) {
//                 s.hasClass("open") ? n.trigger("click") : s.trigger("click");
//                 return false;
//             } else if (t.keyCode == 40) {
//                 s.hasClass("open") ? (n.nextAll(".option:not(.disabled)").first().addClass("focus")) : s.trigger("click");
//                 return false;
//             } else if (t.keyCode == 38) {
//                 s.hasClass("open") ? (n.prevAll(".option:not(.disabled)").first().addClass("focus")) : s.trigger("click");
//                 return false;
//             } else if (t.keyCode == 27) {
//                 s.hasClass("open") && s.trigger("click");
//             }
//         });

//     };
// })(jQuery);0128

// (function(e) {
//     e.fn.niceSelect = function(t) {
//         function s(t) {
//             var multiple = t.hasClass('multiple');
//             t.after(
//                 e("<div></div>")
//                     .addClass("nice-select")
//                     .addClass(t.attr("class") || "")
//                     .addClass(t.attr("disabled") ? "disabled" : "")
//                     .attr("tabindex", t.attr("disabled") ? null : "0")
//                     .html('<span class="current"></span><ul class="list"></ul>')
//             );
//             var s = t.next(),
//                 n = t.find("option"),
//                 i = t.find("option:selected");

//             // Display the selected option(s)
//             updateCurrent(s, i);

//             n.each(function(t) {
//                 var n = e(this),
//                     i = n.data("display");
//                 s.find("ul").append(
//                     e("<li></li>")
//                         .attr("data-value", n.val())
//                         .attr("data-display", i || null)
//                         .addClass(
//                             "option" +
//                             (n.is(":selected") ? " selected" : "") +
//                             (n.is(":disabled") ? " disabled" : "")
//                         )
//                         .html(n.text())
//                 );
//             });
//         }

//         function updateCurrent(niceSelectElement, selectedOptions) {
//             var displayText = selectedOptions.map(function() {
//                 return e(this).text();
//             }).get().join('<br>'); // Join selected options with a line break

//             niceSelectElement.find(".current").html(displayText);
//         }

//         this.hide(),
//             this.each(function() {
//                 var t = e(this);
//                 t.next().hasClass("nice-select") || s(t);
//             }),
//             e(document).on(
//                 "click.nice_select",
//                 ".nice-select .option:not(.disabled)",
//                 function(t) {
//                     var s = e(this),
//                         n = s.closest(".nice-select"),
//                         i = n.prev("select");

//                     if (!n.hasClass("multiple")) {
//                         n.find(".selected").removeClass("selected");
//                         s.addClass("selected");
//                     } else {
//                         s.toggleClass("selected");
//                     }

//                     var selectedOptions = n.find(".selected");
//                     updateCurrent(n, selectedOptions);

//                     i.val(
//                         selectedOptions.map(function() {
//                             return e(this).data("value");
//                         }).get()
//                     ).trigger("change");

//                     var selectedValues = selectedOptions.map(function() {
//                         return e(this).text();
//                     }).get().join(', ');
//                     e("#services").val(selectedValues);
//                 }
//             );

//         e(document).on("click.nice_select", function(t) {
//             if (e(t.target).closest(".nice-select").length === 0) {
//                 e(".nice-select").removeClass("open");
//             }
//         });

//         e(document).on("click.nice_select", ".nice-select", function(t) {
//             var s = e(this);
//             e(".nice-select").not(s).removeClass("open");
//             s.toggleClass("open");
//         });

//         e(document).on("keydown.nice_select", ".nice-select", function(t) {
//             var s = e(this),
//                 n = e(s.find(".focus") || s.find(".list .option.selected"));
//             if (t.keyCode == 32 || t.keyCode == 13) {
//                 s.hasClass("open") ? n.trigger("click") : s.trigger("click");
//                 return false;
//             } else if (t.keyCode == 40) {
//                 s.hasClass("open") ? (n.nextAll(".option:not(.disabled)").first().addClass("focus")) : s.trigger("click");
//                 return false;
//             } else if (t.keyCode == 38) {
//                 s.hasClass("open") ? (n.prevAll(".option:not(.disabled)").first().addClass("focus")) : s.trigger("click");
//                 return false;
//             } else if (t.keyCode == 27) {
//                 s.hasClass("open") && s.trigger("click");
//             }
//         });

//     };
// })(jQuery);


(function(e) {
    e.fn.niceSelect = function(t) {
        function s(t) {
            var multiple = t.hasClass('multiple');
            t.after(
                e("<div></div>")
                    .addClass("nice-select")
                    .addClass(t.attr("class") || "")
                    .addClass(t.attr("disabled") ? "disabled" : "")
                    .attr("tabindex", t.attr("disabled") ? null : "0")
                    .html('<span class="current">Select the services</span><ul class="list"></ul>')
            );
            var s = t.next(),
                n = t.find("option"),
                i = t.find("option:selected");

            // Display the selected option(s)
            updateCurrent(s, i);

            n.each(function(t) {
                var n = e(this),
                    i = n.data("display");
                s.find("ul").append(
                    e("<li></li>")
                        .attr("data-value", n.val())
                        .attr("data-display", i || null)
                        .addClass(
                            "option" +
                            (n.is(":selected") ? " selected" : "") +
                            (n.is(":disabled") ? " disabled" : "")
                        )
                        .html(n.text())
                );
            });
        }

        function updateCurrent(niceSelectElement, selectedOptions) {
            if (selectedOptions.length > 0) {
                var displayText = selectedOptions.map(function() {
                    return e(this).text();
                }).get().join('<br>'); // Join selected options with a line break

                niceSelectElement.find(".current").html(displayText);
            } else {
                niceSelectElement.find(".current").html("Select the services");
            }
        }

        this.hide(),
            this.each(function() {
                var t = e(this);
                t.next().hasClass("nice-select") || s(t);
            }),
            e(document).on(
                "click.nice_select",
                ".nice-select .option:not(.disabled)",
                function(t) {
                    var s = e(this),
                        n = s.closest(".nice-select"),
                        i = n.prev("select");

                    if (!n.hasClass("multiple")) {
                        n.find(".selected").removeClass("selected");
                        s.addClass("selected");
                    } else {
                        s.toggleClass("selected");
                    }

                    var selectedOptions = n.find(".selected");
                    updateCurrent(n, selectedOptions);

                    i.val(
                        selectedOptions.map(function() {
                            return e(this).data("value");
                        }).get()
                    ).trigger("change");

                    var selectedValues = selectedOptions.map(function() {
                        return e(this).text();
                    }).get().join(', ');
                    e("#services").val(selectedValues);
                }
            );

        e(document).on("click.nice_select", function(t) {
            if (e(t.target).closest(".nice-select").length === 0) {
                e(".nice-select").removeClass("open");
            }
        });

        e(document).on("click.nice_select", ".nice-select", function(t) {
            var s = e(this);
            e(".nice-select").not(s).removeClass("open");
            s.toggleClass("open");
        });

        e(document).on("keydown.nice_select", ".nice-select", function(t) {
            var s = e(this),
                n = e(s.find(".focus") || s.find(".list .option.selected"));
            if (t.keyCode == 32 || t.keyCode == 13) {
                s.hasClass("open") ? n.trigger("click") : s.trigger("click");
                return false;
            } else if (t.keyCode == 40) {
                s.hasClass("open") ? (n.nextAll(".option:not(.disabled)").first().addClass("focus")) : s.trigger("click");
                return false;
            } else if (t.keyCode == 38) {
                s.hasClass("open") ? (n.prevAll(".option:not(.disabled)").first().addClass("focus")) : s.trigger("click");
                return false;
            } else if (t.keyCode == 27) {
                s.hasClass("open") && s.trigger("click");
            }
        });

    };
})(jQuery);


