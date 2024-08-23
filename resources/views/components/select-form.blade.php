<select {{$attributes->merge(["class" => "select select-bordered w-10/12"])}}>
      <option disabled selected>Pick One</option>
      {{$slot}}
</select>
