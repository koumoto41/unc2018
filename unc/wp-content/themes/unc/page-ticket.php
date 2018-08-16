<?php
/**
 * チケットページ
 */
	get_header();
	$btn = 'btn btn-block btn-primary';
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
					<h2>TICKET INFORMATION</h2>
				</header>
				<div class="entry-content page_ticket">
					<p class="lead">
						ウシマドナチュラルキャンプ2018チケットは◯/◯～Kampにて販売いたします。<br>
						チケットぴあでの販売は後日お知らせします
					</p>
					<div class="table-responsive">
						<table class="table tbl1">
							<tr>
								<td class="td1"> </td>
								<td class="td1">前売り</td>
								<td class="td1">当日</td>
							</tr>
							<tr>
								<th>2Days Ticket <span class="sm">(9/15,16)</span></th>
								<td>4,000円</td>
								<td>--</td>
							</tr>
							<tr>
								<th>1Days Ticket <span class="sm">(9/15)</span></th>
								<td>3,500円</td>
								<td>--</td>
							</tr>
							<tr>
								<th>Camp Ticket <span class="sm">(9/15,16)</span></th>
								<td colspan="2">1,500円 <span class="sm">(お1人様1枚、1サイト 3m×3m)</span></td>
							</tr>
							<tr>
								<th>OverNight Camp Ticket <span class="sm">(9/16)</span></th>
								<td colspan="2">1,500円 <span class="sm">(お1人様1枚、1サイト 3m×3m)</span></td>
							</tr>
						</table>
					</div>
					<p class="lead fc_text4 pt20">
						チケットは以下の取り扱い店でお買い求め下さい。
					</p>
					<div class="table-responsive">
						<table class="table tbl2 mb40 pb40">
							<tr>
								<th>KAMP</th>
								<td colspan="2">TEL:086-254-1611</td>
							</tr>
						</table>
					</div>
				</div>

				<header class="entry-header">
					<h2>ATTENTION</h2>
				</header>
				<div class="entry-content">
					<ul>

					</ul>
				</div>
			</article><!-- row -->
		</main><!-- col -->
	</div><!-- row -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>