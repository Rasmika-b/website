import pandas as pd 
import numpy as np 
import pickle

df=pd.read_csv(r'C:/Users/RASMIKA BILLA/Downloads/fiverr_clean.csv')
df.drop('name',axis=1,inplace=True)
df.drop('price',axis=1,inplace=True)
df.drop('votes',axis=1,inplace=True)
df= df.dropna()

from sklearn.preprocessing import OrdinalEncoder
ord_enc = OrdinalEncoder()
df['Category'] = ord_enc.fit_transform(df[['Category']])
df['Subcat'] = ord_enc.fit_transform(df[['Subcat']])

X= df.drop('stars',axis=1)
y=df['stars']

from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test= train_test_split(X, y, test_size=0.33)

from sklearn.ensemble import RandomForestRegressor
regressor = RandomForestRegressor(n_estimators = 10, random_state = 0)
regressor.fit(X,y)

pickle.dump(regressor, open('data.pkl','wb'))
