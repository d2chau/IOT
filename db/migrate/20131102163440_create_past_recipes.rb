class CreatePastRecipes < ActiveRecord::Migration
  def change
    create_table :past_recipes do |t|
      t.integer :user_id
      t.string :pearson_identity
      t.date :date_made

      t.timestamps
    end
  end
end
