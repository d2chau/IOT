json.array!(@items) do |item|
  json.extract! item, :name, :exp_period, :category_id
  json.url item_url(item, format: :json)
end
