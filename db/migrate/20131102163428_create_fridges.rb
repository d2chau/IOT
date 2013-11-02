class CreateFridges < ActiveRecord::Migration
  def change
    create_table :fridges do |t|
      t.integer :item_id
      t.integer :quantity
      t.integer :user_id
      t.date :date_bought

      t.timestamps
    end
  end
end
