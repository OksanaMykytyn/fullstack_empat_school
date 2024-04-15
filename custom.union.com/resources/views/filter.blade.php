<div class="filters" >
    <div class="mobile-filter">
        Фільтр
        <img src="../icons/filter.svg" alt="filter" class="mobile-filter__img">
    </div>
    <form class="filter" action="/result" method="GET">
        <div class="filter__title">Фільтр</div>
        <div class="filter__price text">
            Цінa
            <div class="filter__price__field">
                від
                <input class="from" name="from" placeholder="0"></input>
                до
                <input class="to" name="to" placeholder="100000"></input>
            </div>
        </div>
        <div class="filter__style text">
            Стиль дизайну
            <div class="checkboxs">
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    аніме
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    мінімалізм
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    класичний
                </label>
            </div>
        </div>
        <div class="filter__color text">
            Кольори
            <div class="checkboxs">
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    чорний
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    червоний
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    зелений
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    фіолетовий
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    жовтий
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    розовий
                </label>
                <label class="checkbox">
                    <input type="checkbox" class="square">
                    синій
                </label>
            </div>
        </div>
        <button class="filter__btn" name="filter_btn" type="submit" value="on">Застосувати</button>
    </form>
</div>