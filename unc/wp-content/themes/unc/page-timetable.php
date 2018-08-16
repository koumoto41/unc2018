<?php get_header(); ?>
<style>
<!--
	#days {
		margin: 40px 0 20px 0;
		font-family: 'Nunito';
		font-size: 2.0em;
		font-weight: bold;
		color: #3c2200;
	}
-->
</style>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<div class="row">
				<h2 class="title">TIME TABLE</h2>
				<hr />
				<div class="page_timetable">
					<div id="days">9/17(Sat)</div>
					<div class="wp-editor">
						<ul>
							<li>タイムテーブルは予告無く変更になる場合があります。予めご了承下さい。</li>
							<li>9/16(Sat)の20時以降のライブは最終便で本土に戻られる方はご覧になれませんのでご注意下さい。</li>
						</ul>
					</div>
					<p>
						<select id="day_select" class="form-control">
							<option selected="selected" value="1">9/16(Sat)</option>
							<option value="2">9/17(Sun)</option>
						</select>
					</p>

					<div class="table-responsive">
						<table id="day17" class="table tbl_timetable">
							<tbody>
								<tr>
									<th class="select"> </th>
									<th class="min"> </th>
									<th class="tree">TREE STAGE</th>
									<th class="little">Little Forest</th>
									<th class="ibiza">Little IBIZA</th>
									<th class="work">WORKSHOP</th>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">14:00</td>
									<td class="min">00</td>
									<td class="event time_tree">開会宣言</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event time_work" rowspan="3">ダッチオーブン料理教室<br>ベークドチーズケーキ</td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event time_tree" rowspan="4">団長</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">15:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"></td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">16:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">Trio Benares</td>
									<td class="event"> </td>
									<td class="event time_ibiza" rowspan="18">DJ MOOKY</td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">17:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">井手健介</td>
									<td class="event time_little" rowspan="6">naoki</td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
								</tr>
									<tr>
									<td class="min">30</td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event time_tree" rowspan="6">DJ Luv kiyoshi</td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">18:00</td>
									<td class="min">00</td>
									<td class="event time_little" rowspan="6">taa</td>
									<td class="event time_work" rowspan="3">ダッチオーブン料理教室<br>鉄鍋ビビンバ</td>
								</tr>
								<tr>
									<td class="min">10</td>
								</tr>
								<tr>
									<td class="min">20</td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">19:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">清水タケオと南国気分</td>
									<td class="event time_little" rowspan="9">sow</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">20:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">Co-fly</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"></td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event time_little" rowspan="6">vueda</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">21:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">kill me Elk</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event time_little" rowspan="9">daisuke kondo</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event time_tree" rowspan="2">華焔 おーじ</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">22:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">shuhari</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">23:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event time_little" rowspan="9">sasaki hiroaki</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">24:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event time_work" rowspan="3">UFOをよぶかい？</td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event time_little" rowspan="9">burai</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">25:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">26:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event time_little" rowspan="9">monk a</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">27:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event time_little" rowspan="9">ichirota</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">28:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">29:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event time_little" rowspan="9">i.m.i</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">30:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="table-responsive">
						<table id="day18" class="table tbl_timetable" border="1">
							<tbody>
									<tr>
									<th class="select"> </th>
									<th class="min"> </th>
									<th class="tree">TREE STAGE</th>
									<th class="little">Little Forest</th>
									<th class="ibiza">Little IBIZA</th>
									<th class="work">WORKSHOP</th>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">6:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event time_work" rowspan="3">早朝ヨガ</td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">7:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event time_work" rowspan="2">あたりまえラジオ体操</td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event time_work" rowspan="3">ダッチオーブン料理教室<br>ハチミツ＆レモンケーキ</td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">8:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">9:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">10:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">11:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">さとうもか</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event time_work" rowspan="3">ダッチオーブン料理教室<br>パエリア</td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">12:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">玉手初美</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">13:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">斎藤真文 from アラゲホンジ</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
										<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">14:00</td>
									<td class="min">00</td>
									<td class="event time_tree" rowspan="4">せんざきあやの&ミナクマリ</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="hour1" rowspan="6">15:00</td>
									<td class="min">00</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">10</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">20</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">30</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">40</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
								<tr>
									<td class="min">50</td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
									<td class="event"> </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- page_timetable -->
			</div><!-- row -->
		</div><!-- col -->
		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container -->
<script>
<!--
$(function(){

	$('#day_select').val('1');
	$('#days').text('9/16(Sat)');
	$('#day18').css('display', 'none');


	$('#day_select').change(function(e){
		var str	= $(this).val();
		if(str == '1'){
			$('#day17').css('display', 'block');
			$('#day18').css('display', 'none');
			$('#days').text('9/16(Sat)');
		}else{
			$('#day18').css('display', 'block');
			$('#day17').css('display', 'none');
			$('#days').text('9/17(Sun)');
		}
	});

});
-->
</script>
<?php get_footer(); ?>