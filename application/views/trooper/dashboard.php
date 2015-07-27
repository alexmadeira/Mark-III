<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
	  <div class="container-fluid">
	    <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>
		
		<div class="ls-group-btn ls-group-active ls-float-right">
			<button type="button" data-ls-module="tabs" data-target=".child1" class="ls-btn ls-ico-chart-bar-up" aria-selected="true"></button>
			<button type="button" data-ls-module="tabs" data-target=".child2" class="ls-btn ls-ico-table-alt ls-active" aria-selected="true"></button>
		</div>

		<ul class="ls-tabs-nav" id="awesome-tab">
			<li class="ls-active"><a data-ls-module="tabs" href="#tab1">Aba 1</a></li>
			<li><a data-ls-module="tabs" href="#tab2">Aba 2</a></li>
		</ul>

		<div class="ls-tabs-container" id="awesome-tab-content">
		  <div id="tab1" class="ls-tab-content" role="tabpanel">
		    <div class="ls-tab-content child1" role="tabpanel">
		      <p>Contratos e Distribuídos</p>
		        <div id="panel-charts" data-highcharts-chart="0">
		        	<div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 992px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
			      		<h2> Grafico</h2>
		        	</div>
		        </div>
		    </div>
		    <div class="ls-tab-content child2 ls-active" role="tabpanel">
		      <table class="ls-table">
		        <thead>
		          <tr>
		            <th class="ls-txt-center">Período</th>
		            <th class="ls-txt-center">Contratados</th>
		            <th class="ls-txt-center hidden-xs" colspan="2">Distribuídos</th>
		          </tr>
		        </thead>
		        <tbody>
		            <tr>
		              <td class="ls-txt-center">28/03/2014 a 27/04/2014</td>
		              <td class="ls-txt-center">1000000</td>
		              <td class="ls-txt-center hidden-xs">10741</td>
		              <td class="ls-txt-center hidden-xs">1%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">28/03/2014 a 27/04/2014</td>
		              <td class="ls-txt-center">1000000</td>
		              <td class="ls-txt-center hidden-xs">10741</td>
		              <td class="ls-txt-center hidden-xs">1%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">28/03/2014 a 27/04/2014</td>
		              <td class="ls-txt-center">1000000</td>
		              <td class="ls-txt-center hidden-xs">10741</td>
		              <td class="ls-txt-center hidden-xs">1%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">28/03/2014 a 27/04/2014</td>
		              <td class="ls-txt-center">1000000</td>
		              <td class="ls-txt-center hidden-xs">10741</td>
		              <td class="ls-txt-center hidden-xs">1%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">28/03/2014 a 27/04/2014</td>
		              <td class="ls-txt-center">1000000</td>
		              <td class="ls-txt-center hidden-xs">10741</td>
		              <td class="ls-txt-center hidden-xs">1%</td>
		            </tr>
		        </tbody>
		      </table>
		    </div>
		  </div>
		  <div id="tab2" class="ls-tab-content ls-active" role="tabpanel">
		    <div class="ls-tab-content child1" role="tabpanel">
		      <p>Status do cliente</p>
		      <div id="panel-charts-client" data-highcharts-chart="1">
		      	<div class="highcharts-container" id="highcharts-2" style="position: relative; overflow: hidden; width: 992px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
		      		<h2> Grafico</h2>
		      	</div>
		      </div>
		    </div>
		    <div class="ls-tab-content child2 ls-active" role="tabpanel">
		      <table class="ls-table">
		        <thead>
		          <tr>
		            <th class="ls-txt-center">Data</th>
		            <th class="ls-txt-center">Todos</th>
		            <th class="ls-txt-center" colspan="2">Ativos</th>
		            <th class="ls-txt-center hidden-xs" colspan="2">Desativados</th>
		            <th class="ls-txt-center hidden-xs" colspan="2">Bloqueados por bounce</th>
		          </tr>
		        </thead>
		        <tbody>
		            <tr>
		              <td class="ls-txt-center">Hoje</td>
		              <td class="ls-txt-center">29</td>
		              <td class="ls-txt-center">26</td>
		              <td class="ls-txt-center">89%</td>
		              <td class="ls-txt-center hidden-xs">3</td>
		              <td class="ls-txt-center hidden-xs">10%</td>
		              <td class="ls-txt-center hidden-xs">0</td>
		              <td class="ls-txt-center hidden-xs">0%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">Hoje</td>
		              <td class="ls-txt-center">29</td>
		              <td class="ls-txt-center">26</td>
		              <td class="ls-txt-center">89%</td>
		              <td class="ls-txt-center hidden-xs">3</td>
		              <td class="ls-txt-center hidden-xs">10%</td>
		              <td class="ls-txt-center hidden-xs">0</td>
		              <td class="ls-txt-center hidden-xs">0%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">Hoje</td>
		              <td class="ls-txt-center">29</td>
		              <td class="ls-txt-center">26</td>
		              <td class="ls-txt-center">89%</td>
		              <td class="ls-txt-center hidden-xs">3</td>
		              <td class="ls-txt-center hidden-xs">10%</td>
		              <td class="ls-txt-center hidden-xs">0</td>
		              <td class="ls-txt-center hidden-xs">0%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">Hoje</td>
		              <td class="ls-txt-center">29</td>
		              <td class="ls-txt-center">26</td>
		              <td class="ls-txt-center">89%</td>
		              <td class="ls-txt-center hidden-xs">3</td>
		              <td class="ls-txt-center hidden-xs">10%</td>
		              <td class="ls-txt-center hidden-xs">0</td>
		              <td class="ls-txt-center hidden-xs">0%</td>
		            </tr>
		            <tr>
		              <td class="ls-txt-center">Hoje</td>
		              <td class="ls-txt-center">29</td>
		              <td class="ls-txt-center">26</td>
		              <td class="ls-txt-center">89%</td>
		              <td class="ls-txt-center hidden-xs">3</td>
		              <td class="ls-txt-center hidden-xs">10%</td>
		              <td class="ls-txt-center hidden-xs">0</td>
		              <td class="ls-txt-center hidden-xs">0%</td>
		            </tr>
		        </tbody>
		      </table>
		    </div>
		  </div>
		</div>		
	  </div>
	<?php $this->load->view('trooper/include/copyright')?>
	</main>
<?php $this->load->view('trooper/include/_footer')?>