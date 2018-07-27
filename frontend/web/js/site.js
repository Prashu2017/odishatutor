jQuery(function ($) {
    //Price Slide
    $('.priceslide').bxSlider({
        auto: true,
        pager: false,
        minSlides: 2,
        maxSlides: 10,
        moveSlides: 1,
        width: "1000",
        slideWidth: "100%"
    });

    searchFormAjaxify();

    if (typeof airlineFilter != 'undefined') {
        doFilter(airlineFilter);
    }


    //Travelers Says
    $('.travelers-says').bxSlider({
        auto: true,
        controls: false,
        pager: true,
    });
    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    $('.filter_by_airline').on('change', function () {
        doFilter();
    });
    $('.showall_airline').on('click', function (e) {
        $('.loader').show();
        $('.search-result-box').slideDown(10, function () {
            var ctString = $('.search-result-total-box span').html();
            ctString = ctString.replace(/[0-9]/g, '');
            $('.search-result-total-box span').html($('.search-result-box:visible').length + ctString);
            $('.filter_by_airline').each(function (e) {
                $(this).prop("checked", true);
            });
            $('.loader').hide();
        });
    });
    
    
    $('.child_count').change(function () {
        var $that = $(this);
        var $cageW = $('.c_age_wrap');
        var iVal = parseInt($that.val());
        $cageW.html('');

        if (iVal > 0 && iVal < 11) {
            for (i = 0; i < iVal; i++) {
                $cageW.append(getCAgeDiv(i + 1));
            }
        }

    });
    $('.child_count_sb').change(function () {
        var $that = $(this);
        var $cageW = $('.c_age_wrap');
        var iVal = parseInt($that.val());
        $cageW.html('');

        if (iVal > 0 && iVal < 11) {
            for (i = 0; i < iVal; i++) {
                $cageW.append(getCAgeDivSB(i + 1));
            }
        }

    });
    jQuery(document).on('click', '#grid-view', function () {
        if (!$(this).parents('.col-sm-9').hasClass('search_grid')) {
            $(this).parents('.col-sm-9').addClass('search_grid');
        }
    });
    jQuery(document).on('click', '#compbutton', function () {
        if ($('.compare_cb:checked').length < 2) {
            alert("Please select atleast 2 results to compare.");
            return false;
        }
        var el = $('#comp .over table tbody tr');
        var totalHtm = '';
        $('.compare_cb:checked').each(function () {
            var comp = comparisonObj[$(this).val()];
            //console.log(comp);
            totalHtm += '<td style="background:#EEEEEE"> \
                                <table width="100%" class="table table-hover text-center">\
                                  <thead>\
                                    <tr>\
                                        <th style="text-align:center;">' + comp.name + '</th>\
                                    </tr>\
                                   </thead>\
                                  <tbody>\
                                    <tr>\
                                      <td>' + comp.price + '</td>\
                                    </tr>\
                                    <tr>\
                                      <td>' + comp.duration + '</td>\
                                    </tr>\
                                    <tr>\
                                      <td>' + comp.arrival + '</td>\
                                    </tr>\
                                    <tr>\
                                      <td>' + comp.departure + '</td>\
                                    </tr>\
                                    <td><form method="post" action="' + confirmUrl + '"><input type="hidden" name="hash" value=="' + comp.hash + '"/><button class="yellow-but" type="submit">Book</button></form></td>\
                                  </tbody>\
                                </table>\
                            </td>';
        });
        el.html(totalHtm);
        $('#comp').modal(true);
    });
    jQuery(document).on('click', '#compbutton1', function () {
        if ($('.compare_cb:checked').length < 2) {
            alert("Please select atleast 2 results to compare.");
            return false;
        }
        var el = $('#comp .over table tbody tr');
        var totalHtm = '';
        $('.compare_cb:checked').each(function () {
            var comp = comparisonObj[$(this).val()];
            //console.log(comp);
            totalHtm += '<td style="background:#EEEEEE"> \
                                <table width="100%" class="table table-hover text-center">\
                                  <thead>\
                                    <tr>\
                                        <th style="text-align:center;">' + comp.name + '</th>\
                                    </tr>\
                                   </thead>\
                                  <tbody>\
                                    <tr>\
                                      <td>' + (comp.price !== 'N/A' ? '$' + comp.price : comp.price) + '</td>\
                                    </tr>\
                                    <tr>\
                                      <td>' + comp.rating + '</td>\
                                    </tr>\
                                    <tr>\
                                      <td>' + (comp.amenity === '' ? 'N/A' : comp.amenity) + '</td>\
                                    </tr>\
                                    <td><form method="post" action="' + confirmUrl + '"><input type="hidden" name="hash" value=="' + comp.hash + '"/><button class="yellow-but" type="submit">Book</button></form></td>\
                                  </tbody>\
                                </table>\
                            </td>';
        });
        el.html(totalHtm);
        $('#comp').modal(true);
    });
    jQuery(document).on('click', '#list-view', function () {
        $(this).parents('.col-sm-9').removeClass('search_grid');
    });
    jQuery(document).on('change', '#changesorter', function () {
        var sVal = $(this).val();
        if (sVal != '') {
            sArray = sVal.split('_');
            if (sArray.length != 2) {
                return false;
            } else {
                $('#sorttype').val(sArray[0]);
                $('#sortdir').val(sArray[1]);
                $('#sidebar-form').submit();
            }
        }
        return false;
    });

    $(document).on('change', '.sort_f_r', function () {

        $('.loader').show();
        var sVal = $(this).val();
        console.log(sVal);
        if (sVal == 'name_a_z') {
            sortUsingNestedText($('#sParent'), $('.search-result-box'), '.desc h4');
        } else if (sVal == 'name_z_a') {
            sortUsingNestedText($('#sParent'), $('.search-result-box'), '.desc h4', true);
        } else if (sVal == 'price_l_h') {
            sortUsingNestedPrice($('#sParent'), $('.search-result-box'), '.price');
        } else if (sVal == 'price_h_l') {
            sortUsingNestedPrice($('#sParent'), $('.search-result-box'), '.price', true);
        }

        $('.loader').hide();
    });

});

function sortUsingNestedText(parent, childSelector, keySelector, rev) {
    var items = parent.children(childSelector).sort(function (a, b) {
        var vA = $(keySelector, a).text();
        var vB = $(keySelector, b).text();
        if (typeof rev === 'undefined') {
            return (vA < vB) ? -1 : (vA > vB) ? 1 : 0;
        } else {
            return (vA > vB) ? -1 : (vA < vB) ? 1 : 0;
        }

    });
    parent.append(items);
}
function sortUsingNestedPrice(parent, childSelector, keySelector, rev) {
    var items = parent.children(childSelector).sort(function (a, b) {
        var vA = $(keySelector, a).text();
        vA = parseFloat(vA.substring(1));
        var vB = $(keySelector, b).text();
        vB = parseFloat(vB.substring(1));
        if (typeof rev === 'undefined') {
            return (vA < vB) ? -1 : (vA > vB) ? 1 : 0;
        } else {
            return (vA > vB) ? -1 : (vA < vB) ? 1 : 0;
        }

    });
    parent.append(items);
}
function doFilter(airline) {
    if (airline === 's-all') {
        return false;
    }
    var resultString = '';
    $('.loader').show();
    if (typeof airline == 'undefined') {
        $('.filter_by_airline:checked').each(function () {
            resultString += '.s-' + $(this).val() + ', ';
        });
        resultString = resultString.replace(/,\s*$/, "");
    } else {
        resultString = '.' + airline;
    }
    if (typeof airline != 'undefined') {
        $('.filter_by_airline').each(function () {
            if (('.s-' + $(this).val()) != airline) {
                $(this).removeAttr('checked');
            }
        });
    }
    $('.search-result-box').slideDown();
    if ($('.search-result-box').not(resultString).length > 0) {
        $('.search-result-box').not(resultString).slideUp(10, function () {
            var ctString = $('.search-result-total-box span').html();
            ctString = ctString.replace(/[0-9]/g, '');
            $('.search-result-total-box span').html($('.search-result-box:visible').length + ctString);
            $('.loader').hide();
        });
    } else {
        $('.loader').hide();
    }


}
function getCAgeDiv(ind) {
    return '<div class="col-sm-3">\
            <div class="form-group">\
                <label for="">Child ' + ind + ' Age</label>\
                <input name="Flight[child_age][]" type="text" class="form-control small-input">\
            </div>\
        </div>';
}
function getCAgeDivSB(ind) {
    return '<div class="form-group">\
                <label for="">Child ' + ind + ' Age</label>\
                <input name="Flight[child_age][]" type="text" class="form-control small-input">\
            </div>';
}

function searchFormAjaxify() {
    $('.booking-tab form, #sidebar-form').submit(function (e) {
        e.preventDefault();
        $('.loader').show();
        var $that = $(this);
        $.post($that.attr('action'), $that.serialize(), function (response) {
            $('.loader').hide();
            document.open();
            document.write(response);
            document.close();
        }).fail(function () {
            document.location.reload();
        });
    });
}
