<?php get_header();

//Template Name: isotop

?>
<div class="big-demo" data-js="hero-demo">

  <div class="ui-group">
    <h3 class="ui-group__title">Filter</h3>
    <div class="filters button-group js-radio-button-group">
      <button class="button is-checked" data-filter="*">show all</button>
      <button class="button" data-filter=".metal">metal</button>
      <button class="button" data-filter=".transition">transition</button>
      <button class="button" data-filter="ium">&#x2013;ium</button>
    </div>
  </div>
  <div class="ui-group">
    <h3 class="ui-group__title">Sort</h3>
    <div class="sort-by button-group js-radio-button-group">
      <button class="button is-checked" data-sort-by="original-order">original order</button>
      <button class="button" data-sort-by="name">name</button>
      <button class="button" data-sort-by="symbol">symbol</button>
      <button class="button" data-sort-by="number">number</button>
    </div>
  </div>



  <div class="grid">
      <div class="element-item transition metal " data-category="transition">
        <h5 class="name">Mercury</h5>
        <p class="symbol">Hg</p>
        <p class="number">80</p>
        <p class="weight">200.59</p>
      </div>
      <div class="element-item metalloid " data-category="metalloid">
        <h5 class="name">Tellurium</h5>
        <p class="symbol">Te</p>
        <p class="number">52</p>
        <p class="weight">127.6</p>
      </div>
      <div class="element-item post-transition metal " data-category="post-transition">
        <h5 class="name">Bismuth</h5>
        <p class="symbol">Bi</p>
        <p class="number">83</p>
        <p class="weight">208.980</p>
      </div>
      <div class="element-item post-transition metal " data-category="post-transition">
        <h5 class="name">Lead</h5>
        <p class="symbol">Pb</p>
        <p class="number">82</p>
        <p class="weight">207.2</p>
      </div>
      <div class="element-item transition metal " data-category="transition">
        <h5 class="name">Gold</h5>
        <p class="symbol">Au</p>
        <p class="number">79</p>
        <p class="weight">196.967</p>
      </div>
      <div class="element-item alkali metal " data-category="alkali">
        <h5 class="name">Potassium</h5>
        <p class="symbol">K</p>
        <p class="number">19</p>
        <p class="weight">39.0983</p>
      </div>
      <div class="element-item alkali metal " data-category="alkali">
        <h5 class="name">Sodium</h5>
        <p class="symbol">Na</p>
        <p class="number">11</p>
        <p class="weight">22.99</p>
      </div>
      <div class="element-item transition metal " data-category="transition">
        <h5 class="name">Cadmium</h5>
        <p class="symbol">Cd</p>
        <p class="number">48</p>
        <p class="weight">112.411</p>
      </div>
      <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
        <h5 class="name">Calcium</h5>
        <p class="symbol">Ca</p>
        <p class="number">20</p>
        <p class="weight">40.078</p>
      </div>
      <div class="element-item transition metal " data-category="transition">
        <h5 class="name">Rhenium</h5>
        <p class="symbol">Re</p>
        <p class="number">75</p>
        <p class="weight">186.207</p>
      </div>
      <div class="element-item post-transition metal " data-category="post-transition">
        <h5 class="name">Thallium</h5>
        <p class="symbol">Tl</p>
        <p class="number">81</p>
        <p class="weight">204.383</p>
      </div>
      <div class="element-item metalloid " data-category="metalloid">
        <h5 class="name">Antimony</h5>
        <p class="symbol">Sb</p>
        <p class="number">51</p>
        <p class="weight">121.76</p>
      </div>
      <div class="element-item transition metal " data-category="transition">
        <h5 class="name">Cobalt</h5>
        <p class="symbol">Co</p>
        <p class="number">27</p>
        <p class="weight">58.933</p>
      </div>
      <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
        <h5 class="name">Ytterbium</h5>
        <p class="symbol">Yb</p>
        <p class="number">70</p>
        <p class="weight">173.054</p>
      </div>
      <div class="element-item noble-gas nonmetal " data-category="noble-gas">
        <h5 class="name">Argon</h5>
        <p class="symbol">Ar</p>
        <p class="number">18</p>
        <p class="weight">39.948</p>
      </div>
      <div class="element-item diatomic nonmetal " data-category="diatomic">
        <h5 class="name">Nitrogen</h5>
        <p class="symbol">N</p>
        <p class="number">7</p>
        <p class="weight">14.007</p>
      </div>
      <div class="element-item actinoid metal inner-transition " data-category="actinoid">
        <h5 class="name">Uranium</h5>
        <p class="symbol">U</p>
        <p class="number">92</p>
        <p class="weight">238.029</p>
      </div>
      <div class="element-item actinoid metal inner-transition " data-category="actinoid">
        <h5 class="name">Plutonium</h5>
        <p class="symbol">Pu</p>
        <p class="number">94</p>
        <p class="weight">(244)</p>
      </div>
  </div>

  
</div>



<?php get_footer(); ?>