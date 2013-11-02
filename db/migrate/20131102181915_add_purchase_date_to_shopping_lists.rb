class AddPurchaseDateToShoppingLists < ActiveRecord::Migration
  def change
    add_column :shopping_lists, :purchase_date, :date
  end
end
