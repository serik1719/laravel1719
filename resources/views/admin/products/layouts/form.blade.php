<input type="text" class="form-control" name="name" placeholder="Наименование" value="{{$product->name or ""}}" required>

<br>
<select class="form-control" name="product_category_id">
    <option value="0">-- без категории --</option>
</select>

<br>

<textarea class="form-control" id="description" name="description">{{$product->description or "Описание"}}</textarea>

<br>
<select class="form-control" name="novelty">
    <option value="0" @if (isset($product->novelty) && $product->novelty == 1) selected="" @endif >Обычный</option>
    <option value="1" @if (isset($product->novelty) && $product->novelty == 1) selected="" @endif >Новинка</option>
</select>

<br>
<input class="btn btn-primary" type="button" onclick="history.back()" value="Назад">