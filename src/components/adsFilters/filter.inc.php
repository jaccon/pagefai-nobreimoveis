<aside class="widget-area">
    <div class="widget widget_search">
        <h3 class="widget-title"> Buscar Imóvel </h3>
         <p class="search-description"> Digite o código do anúncio ou título para pesquisar </p>

            <input 
              name="search"
              type="search" 
              class="searchBar" 
              placeholder="Código do anúncio"
              id="searchString"
              >

            <button type="submit" 
              class="default-btn mt-4" 
              id="searchSubmit"
              onclick="handleSearchClick()"
              style="pointer-events: all; cursor: pointer;">
              Buscar</button>

              <script>
                  function handleSearchClick() {
                      var searchString = $('#searchString').val();
                      var searchString = $('input[name="search"]').val();
                      var url = '/search.html?search=' + encodeURIComponent(searchString);
                      window.location.href = url;
                  }
              </script>
            <!--  -->

    </div>

    <div class="widget widget_fido_posts_thumb">
        <h3 class="widget-title"> Filtros </h3>

        <form action="search.html">

        <select name="transactiontype">
            <option value=""> Filtrar Comprar / Alugar  </option>
            <option value="For Sale" <?= ($_GET['transactiontype'] === "For Sale") ? 'selected' : '' ?>> Comprar </option>
            <option value="For Rent" <?= ($_GET['transactiontype'] === "For Rent") ? 'selected' : '' ?>> Alguar </option>
        </select>

        <select 
            class="mt-2" 
            name="PropertyType">
            <option value=""> Selecione o tipo de propriedade </option>
            <option value="Residential / Apartment" <?= ($_GET['PropertyType'] === "Residential / Apartment") ? 'selected' : '' ?> > Apartamentos </option>
            <option value="Residential / Land Lot" <?= ($_GET['PropertyType'] === "Residential / Land Lot") ? 'selected' : '' ?> > Land Lot </option>
            <option value="Residential / Home" <?= ($_GET['PropertyType'] === "Residential / Home") ? 'selected' : '' ?> > Casa </option>
            <option value="Residential / Condo" <?= ($_GET['PropertyType'] === "Residential / Condo") ? 'selected' : '' ?> > Casa em Condomínio </option>
            <option value="Residential / Farm Ranch" <?= ($_GET['PropertyType'] === "Residential / Farm Ranch") ? 'selected' : '' ?> > Chacará </option>
            <option value="Commercial / Building" <?= ($_GET['PropertyType'] === "Commercial / Building") ? 'selected' : '' ?> > Prédios Comerciais </option>
            <option value="Commercial / Agricultural" <?= ($_GET['PropertyType'] === "Commercial / Agricultural") ? 'selected' : '' ?> > Agricultural </option>
            <option value="Commercial / Industrial" <?= ($_GET['PropertyType'] === "Commercial / Industrial") ? 'selected' : '' ?>  Prédio Industrial </option>
            <option value="Commercial / Office" <?= ($_GET['PropertyType'] === "Commercial / Office") ? 'selected' : '' ?> > Escritórios </option>
            <option value="Commercial / Loja" <?= ($_GET['PropertyType'] === "Commercial / Loja") ? 'selected' : '' ?> > Lojas Comerciais </option>
            <option value="Commercial / Land Lot" <?= ($_GET['PropertyType'] === "Commercial / Land Lot") ? 'selected' : '' ?> > Land Lot </option>
       </select>

        <div class="col-md-12 mt-4">
          <p class="filter-title"> Faixa de Preço </p>
          <input 
            type="number" 
            class="col-md-3 priceList" 
            placeholder="Até" 
            value="<?= $_GET['priceRange']; ?>"
            name="priceRange" />
        </div>

        <div class="col-md-12 mt-4">
          <p class="filter-title"> Área ( M² ) </p>
          <select 
            class="mt-2"
            name="ConstructedArea">
            <option value=""> Tamanho da área </option>
            <option value="35"  <?= ($_GET['ConstructedArea'] === "35") ? 'selected' : '' ?> > Até 35 m² </option>
            <option value="45" <?= ($_GET['ConstructedArea'] === "45") ? 'selected' : '' ?> > Até 45 m² </option>
            <option value="55" <?= ($_GET['ConstructedArea'] === "55") ? 'selected' : '' ?> > Até 55 m² </option>
            <option value="100" <?= ($_GET['ConstructedArea'] === "100") ? 'selected' : '' ?> > Até 100 m² </option>
            <option value="101" <?= ($_GET['ConstructedArea'] === "101") ? 'selected' : '' ?> > Maior que 100 m² </option>
          </select>
        </div>
        
        <div class="col-md-12 mt-4">
          <p class="filter-title"> Vagas de Garagem </p>
          <select 
          class="mt-2"
          name="Garage">
          <option value=""> Quantidade de Vagas </option>
          <option value="0"   <?= ($_GET['Garage'] === "35") ? 'selected' : '' ?>> Sem vaga </option>
            <option value="1" <?= ($_GET['Garage'] === "1") ? 'selected' : '' ?>> 1 </option>
            <option value="2" <?= ($_GET['Garage'] === "2") ? 'selected' : '' ?>> 2 </option>
            <option value="3" <?= ($_GET['Garage'] === "3") ? 'selected' : '' ?>> 3 </option>
            <option value="4" <?= ($_GET['Garage'] === "4") ? 'selected' : '' ?>> Mais que 4 </option>
          </select>
        </div>

        <div class="col-md-12 mt-4">
          <p class="filter-title"> Dormitórios </p>
          <select 
            class="mt-2"
            name="Bedrooms">
            <option value=""> Quantidade de Dormitórios </option>
            <option value="1"  <?= ($_GET['Bedrooms'] === "1") ? 'selected' : '' ?> > 1 </option>
            <option value="2" <?= ($_GET['Bedrooms'] === "2") ? 'selected' : '' ?> > 2 </option>
            <option value="3" <?= ($_GET['Bedrooms'] === "3") ? 'selected' : '' ?> > 3 </option>
            <option value="4" <?= ($_GET['Bedrooms'] === "4") ? 'selected' : '' ?> > 4 </option>
            <option value="5" <?= ($_GET['Bedrooms'] === "5") ? 'selected' : '' ?> > Mais que 5 </option>
          </select>
        </div>

        <div class="col-md-12 mt-4">
          <p class="filter-title">  Suítes </p>
          <select 
            class="mt-2"
            name="Suites"
            >
            <option value=""> Quantidade de Suítes </option>
            <option value="1" <?= ($_GET['Suites'] === "1") ? 'selected' : '' ?> > 1 </option>
            <option value="2" <?= ($_GET['Suites'] === "2") ? 'selected' : '' ?> > 2 </option>
            <option value="3" <?= ($_GET['Suites'] === "3") ? 'selected' : '' ?> > 3 </option>
            <option value="4" <?= ($_GET['Suites'] === "4") ? 'selected' : '' ?> > 4 </option>
            <option value="5" <?= ($_GET['Suites'] === "5") ? 'selected' : '' ?> > Mais que 5 </option>
          </select>
        </div>

        <div class="col-md-12 mt-4">
          <p 
            class="filter-title"
          > Banheiros </p>
          <select 
            class="mt-2" 
            name="Bathrooms">
            <option value=""> Quantidade de Banheiros </option>
            <option value="1" <?= ($_GET['Bathrooms'] === "1") ? 'selected' : '' ?> > 1 </option>
            <option value="2" <?= ($_GET['Bathrooms'] === "2") ? 'selected' : '' ?> > 2 </option>
            <option value="3" <?= ($_GET['Bathrooms'] === "3") ? 'selected' : '' ?> > 3 </option>
            <option value="4" <?= ($_GET['Bathrooms'] === "4") ? 'selected' : '' ?> > 4 </option>
            <option value="5" <?= ($_GET['Bathrooms'] === "5") ? 'selected' : '' ?> > Mais que 5 </option>
          </select>

          <input type="hidden" name="filters" value="true" />

        </div>

        
        <button type="submit" 
        class="default-btn mt-4" 
        style="pointer-events: all; cursor: pointer;">
        Filtrar Anúncios</button>
      
      </form>

    </div>

</aside>