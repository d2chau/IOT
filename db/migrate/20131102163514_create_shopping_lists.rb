class CreateShoppingLists < ActiveRecord::Migration
  def change
    create_table :shopping_lists do |t|
      t.integer :item_id
      t.integer :quantity
      t.integer :user_id

      t.timestamps
    end
  end
end
