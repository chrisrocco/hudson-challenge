import csv

inputFileName = "input_data.csv"

userNames = set()
studies = {}
first_user_name = "Albert Einstein"


def main():
	with open( inputFileName ) as csvfile:
		reader = csv.DictReader(csvfile)
		inputColumnNames = reader.fieldnames
		nameStart = inputColumnNames.index(first_user_name)
		userNames = set(  inputColumnNames[nameStart:]  )
		print(userNames)

def getStudy(row):
	pass

def getGene(row):
	pass






if __name__ == "__main__":
	main()