class User < ActiveRecord::Base
  has_many :fridges
  has_many :past_recipes
  has_many :shopping_lists
end
