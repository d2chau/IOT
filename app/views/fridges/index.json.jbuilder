json.array!(@fridges) do |fridge|
  json.extract! fridge, :item_id, :quantity, :user_id, :date_bought
  json.url fridge_url(fridge, format: :json)
end
