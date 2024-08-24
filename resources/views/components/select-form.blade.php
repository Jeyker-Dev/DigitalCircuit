<select {!! $attributes->merge(["class" => "select select-bordered border-gray-300 dark:border-sky-950 dark:bg-sky-960 dark:text-gray-100 focus:border-sky-500 dark:focus:border-sky-600 focus:ring-sky-500 dark:focus:ring-sky-600 rounded-md shadow-sm"]) !!}>
      <option value="">Pick One</option>
      {{$slot}}
</select>
