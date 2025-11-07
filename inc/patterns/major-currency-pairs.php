<?php

/**
 * Register the "Major Currency Pairs Table" block pattern.
 */
if (!function_exists('apmwptheme_register_currency_pairs_pattern')) {
    function apmwptheme_register_currency_pairs_pattern()
    {
        register_block_pattern(
            'apmwptheme/currency-pairs-table',
            array(
                'title'       => __('Major Currency Pairs Table', 'apmwptheme'),
                'description' => __('Table showing currency indices with sell, buy, update time, and change columns.'),
                'categories'  => array('text', 'table'),
                'content'     => '
<!-- wp:group {"align":"full","className":"currency-pairs-section"} -->
<div class="wp-block-group alignfull currency-pairs-section">

    <!-- wp:heading {"className":"currency-table-heading"} -->
    <h2 class="currency-table-heading">Major currency pairs</h2>
    <!-- /wp:heading -->

    <!-- wp:table {"className":"currency-table"} -->
    <figure class="wp-block-table currency-table"><table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Sell</th>
                <th>Buy</th>
                <th>Updated</th>
                <th>Change</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Wall Street</td>
                <td>44508.7</td>
                <td>44518.5</td>
                <td>22:15:56</td>
                <td><span class="change-pos">0.2</span></td>
            </tr>
            <tr>
                <td>Hong Kong HS50</td>
                <td>22505.5</td>
                <td>22535.5</td>
                <td>22:15:57</td>
                <td><span class="change-neg">-72.7</span></td>
            </tr>
            <tr>
                <td>Hong Kong Tech</td>
                <td>5480.8</td>
                <td>5489.8</td>
                <td>22:15:57</td>
                <td><span class="change-neg">-33.7</span></td>
            </tr>
            <tr>
                <td>US 500</td>
                <td>6111.56</td>
                <td>6113.06</td>
                <td>22:15:56</td>
                <td><span class="change-pos">1.86</span></td>
            </tr>
            <tr>
                <td>US Tech 100</td>
                <td>22115.5</td>
                <td>22120.5</td>
                <td>22:15:56</td>
                <td><span class="change-pos">7.8</span></td>
            </tr>
            <tr>
                <td>FTSE 100</td>
                <td>8707.9</td>
                <td>8711.9</td>
                <td>22:15:56</td>
                <td><span class="change-neg">-10.5</span></td>
            </tr>
            <tr>
                <td>Australia 200</td>
                <td>8511.7</td>
                <td>8515.7</td>
                <td>22:15:56</td>
                <td><span class="change-neg">-59.8</span></td>
            </tr>
            <tr>
                <td>Germany 40</td>
                <td>22503.4</td>
                <td>22508.4</td>
                <td>22:15:56</td>
                <td><span class="change-pos">29.9</span></td>
            </tr>
        </tbody>
    </table></figure>
    <!-- /wp:table -->

</div>
<!-- /wp:group -->
                ',
            )
        );
    }
    add_action('init', 'apmwptheme_register_currency_pairs_pattern');
}
