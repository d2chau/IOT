json.array!(@past_recipes) do |past_recipe|
  json.extract! past_recipe, :user_id, :pearson_identity, :date_made
  json.url past_recipe_url(past_recipe, format: :json)
end
