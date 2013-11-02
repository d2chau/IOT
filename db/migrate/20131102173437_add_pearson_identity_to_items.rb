class AddPearsonIdentityToItems < ActiveRecord::Migration
  def change
    add_column :items, :person_identity, :string
  end
end
